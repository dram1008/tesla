<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Продукция';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .col-lg-4 {
        padding-bottom: 60px;
    }
</style>
<div class="site-about">
    <h1 class="page-header"><?= Html::encode($this->title) ?></h1>

    <h2 class="page-header"><span class="label label-default">220 В</span></h2>

    <div class="row">
        <?php foreach (\app\models\Product::query(['v' => 220])->orderBy(['kvt' => SORT_ASC])->all() as $item) { ?>
            <div class="col-lg-4">
                <h3><?= $item['name'] ?></h3>
                <img src="/images/controller/site/production/220.jpg" width="100%" class="thumbnail"/>

                <p><span style="font-size: 400%;"><?= $item['kvt'] ?></span> кВт, <span class="label label-default">220 В</span>
                </p>
                <a href="<?= \yii\helpers\Url::to(['site/buy', 'id' => $item['id']]); ?>" class="btn btn-success"
                   style="width: 100%"><?=\Yii::$app->formatter->asCurrency($item['price']) ?> руб.</a>
            </div>
        <?php } ?>
    </div>


    <h2 class="page-header"><span class="label label-default">380 В</span></h2>

    <div class="row">
        <?php foreach (\app\models\Product::query(['v' => 380])->orderBy(['kvt' => SORT_ASC])->all() as $item) { ?>
            <div class="col-lg-4">
                <h3><?= $item['name'] ?></h3>
                <img src="/images/controller/site/production/380.jpg" width="100%" class="thumbnail"/>

                <p><span style="font-size: 400%;"><?= $item['kvt'] ?></span> кВт, <span class="label label-default">380 В</span>
                </p>
                <a href="javascript:void(0);" class="btn btn-success"
                   style="width: 100%"><?= $item['price'] ?> руб.</a>
            </div>
        <?php } ?>


    </div>

    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/index/2.jpg', true),
        'title'       => 'Купить генератор Теслы',
        'description' => 'Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива. Время работы не ограничено. Не нужно ветра, солнца, воды и т.п.',
    ]) ?>

</div>
