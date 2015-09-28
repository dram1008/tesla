<?php

namespace app\models\Form;

use app\models\User;
use app\services\Subscribe;
use cs\Application;
use cs\base\BaseForm;
use cs\services\VarDumper;
use cs\Widget\PlaceMap\PlaceMap;
use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

/**
 * ContactForm is the model behind the contact form.
 */
class Request extends BaseForm
{
    const TABLE = 'tg_requests';

    public $id;
    public $name;
    public $email;
    public $point;
    public $phone;
    public $comment;
    public $product_id;


    /**
     */
    public function __construct()
    {
        self::$fields = [
            [
                'product_id', 'Имя', 1
            ],
            [
                'name', 'Имя', 1
            ],
            [
                'email', 'Почта', 1, 'email'
            ],
            [
                'phone', 'Телефон', 0, 'default'
            ],
            [
                'comment', 'Комментарий', 0, 'default'
            ],
            [
                'point', 'Адрес доставки', 0, "default",
                'widget' => [PlaceMap::className(), [
                    'style' => [
                        'input'  => ['class' => 'form-control'],
                        'divMap' => ['style' => 'width:100%'],
                    ]
                ]]
            ],

        ];
    }

    /**
     * Делает заказ
     *
     * @param  int $id идентификатор генератора
     *
     * @return boolean whether the model passes validation
     */
    public function insert($fields = null)
    {
        $request = parent::insert([
            'beforeInsert' => function ($fields) {
                $fields['datetime'] = time();
                $fields['status'] = \app\models\Request::STATUS_1_WAIT;

                return $fields;
            }
        ]);
        if ($request === false) return false;
        $fields = [
            'email'              => strtolower($this->email),
            'is_active'          => 1,
            'is_confirm'         => 0,
            'subscribe_is_tesla' => 1,
        ];
        foreach(Subscribe::$userFieldList as $field) {
            $fields[$field] = 1;
        }
        $user = User::insert($fields);
        $request = new \app\models\Request($request);
        $request->update(['user_id' => $user->getId()]);
        $fields = \app\services\RegistrationDispatcher::add($user->getId());
        // письмо им
        \cs\Application::mail($this->email, 'Поздравляем вы сделали первый шаг к своему полю коллективного счастья', 'new_request_client', [
            'url'      => Url::to([
                'site/activate',
                'code' => $fields['code']
            ], true),
            'user'     => $user,
            'request' => $request,
        ]);
        foreach (\Yii::$app->params['requestMailList'] as $item) {
            // письмо нам
            Application::mail($item, 'Появился заказ на TeslaGen', 'new_request', [
                'request' => $request,
            ]);
        }

        return $request;
    }
}
