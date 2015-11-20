<?php

/* @var $this yii\web\View */
/* @var $item app\models\NewsItem */

$this->title = $item->getField('header');
?>
<div class="site-index">
    <h1 class="page-header"><?= \yii\bootstrap\Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <?= $item->getField('content') ?>
        </div>
    </div>

    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to(\cs\Widget\FileUpload2\FileUpload::getOriginal($item->getImage()), true),
        'title'       => $item->getField('header'),
        'description' => \app\services\GsssHtml::getMiniText($item->getField('content')),
    ]) ?>
</div>
