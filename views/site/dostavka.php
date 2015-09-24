<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Доставка';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <p>Доставка возможна в любую точку планеты</p>
    <p>Отгрузка происходит только после 50% предоплате.</p>
    <p>Доставка ТК Деловые линии или на Ваш выбор ТК.</p>
    <p>По москве доставка бесплатная.</p>
</div>
