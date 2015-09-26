<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 24.09.2015
 * Time: 23:30
 */
/** @var $request array */
?>


Поступил новый заказ:</p>
Модель: <?= \app\models\Product::find($request->getField('product_id'))->getField('name') ?>
Имя: <?= $request->getField('name') ?>
Email: <?= $request->getField('email') ?>
Телефон: <?= $request->getField('phone') ?>
Комментарий: <?= nl2br($request->getField('comment'))  ?>
Доставка: <?= $request->getField('point_address') ?>
<?= \yii\helpers\Url::to(['site/map', 'lat' => $request->getField('point_lat'), 'lng' => $request->getField('point_lng')])?>