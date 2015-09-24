<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Аренда';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <img src="/images/controller/site/rent/1.jpg" width="100%" class="thumbnail center-block"/>
        </div>
        <div class="col-lg-4">
            <p class="lead">Предоставляем вам бесплатно протестировать наш ТеслаГен.</p>
            <p>Для этого вам нужно только внести залоговую стоимость в размере 60% номинальной цены и если он вам не понравится мы возвращаем вам деньги и с вами больше не работаем, а если понравится - оставляйте и наслаждайтесь</p>
            <a href="/contact" class="btn btn-success btn-lg" style="width: 100%">Позвонить</a>
        </div>
    </div>
</div>
