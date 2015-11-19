<?php
/**
 * @var $item \app\models\NewsItem
 * @var $user \app\models\user
 */

use yii\helpers\Html;
use app\services\GsssHtml;

$content = $item->getField('content', '');
?>

<?= $item->getName() ?>

Краткое содержание:
<?= $content ?>
