<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="col-lg-4 col-lg-offset-4">
        <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

        <p>Пожалуйста заполните нижеследующие поля:</p>

        <?php $form = ActiveForm::begin([
            'id'                   => 'login-form',
            'enableAjaxValidation' => true,
//        'options'              => ['class' => 'form-horizontal'],
//        'fieldConfig'          => [
//            'template'     => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
//            'labelOptions' => ['class' => 'col-lg-1 control-label'],
//        ],
        ]); ?>

        <?= $form->field($model, 'username', ['inputOptions' => ['placeholder' => 'email']])->label('email', ['class' => 'hide']) ?>
        <?= $form->field($model, 'password', ['inputOptions' => ['placeholder' => 'Пароль']])->label('Пароль', ['class' => 'hide'])->passwordInput() ?>
        <?= $form->field($model, 'rememberMe')->checkbox()->label('Запомнить меня') ?>

        <div class="form-group">
            <?= Html::submitButton('Войти', [
                'class' => 'btn btn-primary',
                'name'  => 'login-button',
                'style' => 'width:100%;',
            ]) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>


</div>
