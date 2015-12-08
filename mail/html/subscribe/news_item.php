<?php
/**
 * @var $item \app\models\NewsItem
 * @var $user \app\models\user
 */

use yii\helpers\Html;
use app\services\GsssHtml;
use cs\services\Str;

$content = $item->getField('content', '');
// выбираю все изображения из контента
$start = 0;
$ret = [];
do {
    $pos = Str::pos('src="/upload/HtmlContent/', $content, $start);
    if ($pos === false) break;
    $end = Str::pos('"', $content, $pos+5);
    $src = Str::sub($content,$pos+5, $end-$pos-5);
    $ret[] = $src;
    $start = $end;
} while (true);

foreach ($ret as $src) {
    $content = Str::replace('src="'.$src.'"', 'src="'.\yii\helpers\Url::to($src, true).'"', $content);
}

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