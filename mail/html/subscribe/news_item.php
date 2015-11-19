<?php
/**
 * @var $item \app\models\NewsItem
 * @var $user \app\models\user
 */

use yii\helpers\Html;
use app\services\GsssHtml;

$content = $item->getField('content', '');
?>

<h3 style="font-weight: normal;"><?= $item->getName() ?></h3>

<p><a href="<?= $item->getLink(true) ?>"><img src="<?= $item->getImage(true) ?>" style="display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
  -o-transition: border .2s ease-in-out;
  transition: border .2s ease-in-out;"/></a></p>

<?= $content ?>