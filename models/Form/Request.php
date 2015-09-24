<?php

namespace app\models\Form;

use cs\Application;
use cs\base\BaseForm;
use cs\services\VarDumper;
use cs\Widget\PlaceMap\PlaceMap;
use Yii;
use yii\base\Model;
use yii\helpers\ArrayHelper;

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
            'beforeInsert' => function($fields) {
                $fields['datetime'] = time();

                return $fields;
            }
        ]);
        Yii::warning(\yii\helpers\VarDumper::dumpAsString($request), 'tg\\request');
        Yii::warning(\yii\helpers\VarDumper::dumpAsString(\Yii::$app->params['requestMailList']), 'tg\\request');
        if ($request === false) return false;
        foreach(\Yii::$app->params['requestMailList'] as $item) {
            $result = Application::mail($item, 'Появился заказ на TeslaGen', 'new_request', [
                'request' => $request,
            ]);
            Yii::warning(\yii\helpers\VarDumper::dumpAsString(\Yii::$app->mailer), 'tg\\request');
            Yii::warning(\yii\helpers\VarDumper::dumpAsString($result), 'tg\\request');
        }

        return $request;
    }
}
