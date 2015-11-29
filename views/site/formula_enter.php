<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Формула вхождения во Вселенную Света';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="page-header text-center"><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <center>
            <p><img src="/images/controller/site/formula_enter/holo.png" style="width: 100%; max-width: 400px;"></p>
            </center>
            <p class="lead" style="text-align: justify;line-height: 150%;">
                Здесь и Сейчас, Я как житель земли и Творец своей судьбы и продолжатель своего рода принимаю ответственность, что буду строить взаимоотношения с представителями Единого Мирового Божественного Союза TeslaGen и Галактического Союза Сил Света на основе взаимопонимания, уважения, любви, взаимопомощи, честного слова и процветания для формирования на планете Земля стандарта Золотого Века, то есть планеты Богов СоТворцов для того чтобы каждый мог подарить свою любовь теми Дарами и Талантами которыми обладает для того чтобы каждый человек испытывал состояние безусловного Счастья и Любви и осознаю что имею дело с зеркалом своей судьбы, то есть любые не положительные мысли, слова и поступки вернутся мне в десятикратном размере и будут отражены не только на мне но и на всем моем Роду вниз до седьмого колена и вверх до седьмого колена. Равно как и позитивные мысли слова и поступки вернутся мне в десятикратном размере. Я Есмь Творец и Желаю Всем Счастья, Так Есть, так было и так будет всегда. Прописано в Вечности со скоростью мысли и по воле Бога. Благодарю.
            </p>
        </div>
    </div>


    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/formula_enter/holo.png', true),
        'title'       => $this->title,
        'description' => 'Формула вхождения во Вселенную Света',
    ]) ?>
</div>
