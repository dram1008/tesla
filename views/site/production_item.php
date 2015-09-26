<?php

/* @var $this yii\web\View */
/* @var $item app\models\Product */

use yii\helpers\Html;

$this->title = $item->getField('name');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .col-lg-4 {
        padding-bottom: 60px;
    }
</style>
<div class="site-about">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-4">
            <img src="<?= $item->getField('image') ?>" class="thumbnail"/>

        </div>
        <div class="col-lg-8">
            <?= $item->getField('content') ?>
            <hr>
            <a href="<?= \yii\helpers\Url::to(['site/buy', 'id' => $item->getId()]) ?>" class="btn btn-success" style="width: 100%">
                <?= \Yii::$app->formatter->asCurrency((int)$item->getField('price')) ?>
            </a>
        </div>
    </div>


    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to($item->getField('image'), true),
        'title'       => $item->getField('name'),
        'description' => strip_tags($item->getField('content')),
    ]) ?>

</div>