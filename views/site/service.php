<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Сервис';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="row">
    <div class="col-lg-8">
        <img src="/images/controller/site/service/122.jpg" width="100%" class="thumbnail center-block"/>
    </div>
    <div class="col-lg-4">
        <p class="lead">Наши гармонизированные братья сделают все в лучшем виде.<br>Только так.<br>Здесь и Сейчас.</p>
    </div>
    </div>
</div>
