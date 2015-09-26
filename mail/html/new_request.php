<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 24.09.2015
 * Time: 23:30
 */
/** @var $request array */
?>


<p>Поступил новый заказ:</p>
<p>Модель: <?= \app\models\Product::find($request->getField('product_id'))->getField('name') ?></p>
<p>Имя: <?= $request->getField('name') ?></p>
<p>Email: <?= $request->getField('email') ?></p>
<p>Телефон: <?= $request->getField('phone') ?></p>
<p>Комментарий: <?= nl2br($request->getField('comment'))  ?></p>
<p>Доставка: <?= $request->getField('point_address')  ?></p>
<p><a href="<?= \yii\helpers\Url::to(['site/map', 'lat' => $request->getField('point_lat'), 'lng' => $request->getField('point_lng')], true)?>"><?= \yii\helpers\Url::to(['site/map', 'lat' => $request->getField('point_lat'), 'lng' => $request->getField('point_lng')], true)?></a> </p>