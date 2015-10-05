<?php

/** @var $request \app\models\Request */
/** @var $user \app\models\User */

$product = \app\models\Product::find($request->getField('product_id'));
?>


Вы сделали очередной заказ
Наименование: <?= $product->getField('name') ?>
Цена: <?= $product->getField('price') ?>
