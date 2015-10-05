<?php

/** @var $request \app\models\Request */
/** @var $user \app\models\User */

$product = \app\models\Product::find($request->getField('product_id'));
?>


<p>Вы сделали очередной заказ</p>
<p>Наименование: <?= $product->getField('name') ?></p>
<p>Цена: <?= $product->getField('price') ?></p>
