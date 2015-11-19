<?php
/**
 * @var $item \app\models\NewsItem
 * @var $user \app\models\user
 */

use yii\helpers\Html;
use app\services\GsssHtml;

$content = $item->getField('content', '');
?>

На инструмент Вознесения была добавлена следующая новость:
<?= $item->getName() ?>

Краткое содержание:
<?= $content ?>
