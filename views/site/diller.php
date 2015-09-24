<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Диллерская программа';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-12">
            <img src="/images/controller/site/diller/diller.jpg" class="thumbnail" width="100%"/>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
            <p>У нас возможна диллерская программа.</p>
            <a href="/contact" class="btn btn-success btn-lg">Звоните</a>
        </div>
    </div>

</div>
