<?php

/* @var $this yii\web\View */

$this->title = 'Новости';
?>
<div class="site-index">
    <h1 class="page-header"><?= \yii\bootstrap\Html::encode($this->title) ?></h1>

    <div class="row">
        <?php foreach(\app\models\NewsItem::query()->orderBy(['date' => SORT_DESC])->all() as $item) { ?>
            <?php $i = new \app\models\NewsItem($item); ?>
            <div class="col-lg-4">
                <div style="height: 70px;">
                    <p><?= $i->getField('header')?></p>
                </div>
                <p style="font-size: 70%;color: #888;"><?= \app\services\GsssHtml::dateString($i->getField('date')) ?></p>
                <a href="<?= $i->getLink() ?>">
                    <img src="<?= $i->getImage()?>" width="100%" class="thumbnail"/>
                </a>
            </div>
        <?php } ?>
    </div>

    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/index/3.jpg', true),
        'title'       => 'Новости',
        'description' => 'Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива. Время работы не ограничено. Не нужно ветра, солнца, воды и т.п.',
    ]) ?>

</div>
