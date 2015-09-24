<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <p><img src="/images/controller/site/contact/contact.jpg" width="100%" class="thumbnail"/></p>

    <p class="lead">
        Земля <span class="glyphicon glyphicon-chevron-right">
            Россия             <span class="glyphicon glyphicon-chevron-right">
                Москва <span class="glyphicon glyphicon-chevron-right">
                    Moscow City <span class="glyphicon glyphicon-chevron-right">
                        Башня Эволюция</p>

    <div class="jumbotron">
        <p>+7 (925) 237-45-01 Дмитрий Анатольевич</p>

        <p>+7 (926) 518-98-75 Денис Валерьевич</p>
    </div>
    <?=

    (new \app\services\GoogleMaps())->map([
        'width'     => '100%',
        'height'    => '400',
        'pointList' => [[
            'lng'         => '37.541718',
            'lat'         => '55.748577',
            'name'        => 'Московский офис',
            'description' => 'Земля, Россия, Москва, Moscow City, Башня Эволюция',
            'image'       => '',
            'url'         => '',
        ]],
    ]) ?>
</div>
