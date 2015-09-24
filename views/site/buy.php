<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model cs\base\BaseForm */
/* @var $id int идентификатор генератора */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Заказ генератора';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Благодарим вас за заказ.
        </div>

    <?php else: ?>


        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <input type="hidden" name="<?= $model->formName()?>[product_id]" value="<?= $id ?>">
                <?= $model->field($form, 'name') ?>
                <?= $model->field($form, 'email') ?>
                <?= $model->field($form, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '+7 (999) 999-99-99'
                ]) ?>
                <?= $model->field($form, 'point') ?>
                <?= $model->field($form, 'comment')->textarea(['rows' => 20]) ?>

                <hr>
                <div class="form-group">
                    <?= Html::submitButton('Отправить', [
                        'class' => 'btn btn-primary',
                        'name'  => 'contact-button',
                        'style' => 'width:100%',
                    ]) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>

    <?php endif; ?>

</div>
