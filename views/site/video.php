<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Проект Новая Земля';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">

            <?php if (isset(Yii::$app->request->cookies['isGodsStart'])) { ?>
                <iframe style="margin-top: 50px;" width="100%" class="thumbnail" height="315" src="https://www.youtube.com/embed/PNvcyTCC6Qs" frameborder="0" allowfullscreen></iframe>
            <?php } ?>


            <div class="jumbotron">
                <h1>Здравствуйте дорогие братья Земляне!</h1>
                <p>Просмотр этого видео ролика возможен только при принятии условий нижеследующего соглашения</p>
            </div>
            <center>
                <p><img src="/images/controller/site/conditions/holo.png" style="width: 100%; max-width: 400px;"></p>
            </center>
            <p>
                Любое живое существо наблюдающее Единый Божественный Мировой Союз находящееся в этой
                Вселенной прошлого настоящего и будущего, формирующее мысли о нем или так или иначе связанные с ним
                автоматически в одностороннем порядке принимает условия нижеследующего соглашения.
            </p>

            <p>
                Я полностью принимаю принципы жизни и развития Людей, объединенных в Человеческую Цивилизацию, как
                единого
                сообщества разумных живых существ провозглашенные в Декларации человечества Новой Эры
                <a href="http://www.galaxysss.com/declaration" target="_blank">http://www.galaxysss.com/declaration</a>
            </p>

            <p><img src="/images/controller/site/conditions/declaration.jpg" width="100%" class="thumbnail"></p>

            <p>
                Я принимаю Манифест Свободного Сознания (<a href="http://www.galaxysss.com/manifest" target="_blank">http://www.galaxysss.com/manifest</a>)
                в области своего подсознания как
                статус своего самоопределения и своих намерений в прошлом, настоящем и будущем для каждого атома
                вселенной.
            </p>

            <p><img src="/images/controller/site/conditions/manifest.jpg" width="100%" class="thumbnail"></p>

            <p>
                Я почитаю и стремлюсь исполнять совершенным образом Кодекс Света (<a
                    href="http://www.galaxysss.com/codex"
                    target="_blank">http://www.galaxysss.com/codex</a>).
            </p>

            <p><img src="/images/controller/site/conditions/codex.jpg" width="100%" class="thumbnail"></p>

            <p>
                Я пропечатал уровень своего сверх сознания печатью Творца (<a href="http://www.i-am-avatar.com/"
                                                                              target="_blank">http://www.i-am-avatar.com/</a>)
                определив таким образом
                статус самоопределения и свою Волю.
            </p>
            <center>
                <p><img src="/images/controller/site/conditions/stamp.jpg" width="100%" style="max-width: 400px"
                        class="img-circle"></p>
            </center>
            <p>
                Моя Воля является полностью автономной и неприкосновенной.
            </p>

            <p>
                Любое живое существо входящее в Мое поле визуального и ментального наблюдения получает от меня только
                то,
                что
                сам и породил по принципу Зеркала: «Кто ко Мне с чем придет, тот этого и получит».
            </p>



            <p>
                Я сотрудничаю с другими только по принципу братства «Один за всех и все за одного», принимающие <a
                    href="/formulaEnter"> формулу
                    Вхождения во Вселенную Света</a>.
            </p>

            <center>
                <p><img src="/images/controller/site/conditions/earth.jpg" width="100%"
                        class="thumbnail"></p>
            </center>
            <?php if (!isset(Yii::$app->request->cookies['isGodsStart'])) { ?>
                <hr>
                <?php
                $this->registerJs(<<<JS
function setCookie (name, value, expires, path, domain, secure) {
            document.cookie = name + "=" + escape(value) +
            ((expires) ? "; expires=" + expires : "") +
            ((path) ? "; path=" + path : "") +
            ((domain) ? "; domain=" + domain : "") +
            ((secure) ? "; secure" : "");
        }
$('#buttonSuccess').click(function() {
    setCookie('isGodsStart', 1);
    window.location = '/video';
});
JS
                );
                ?>
                <button class="btn btn-success btn-lg" id="buttonSuccess" style="width: 100%; height: 100px;">Полностью принимаю, Я Есмь Творец, Я желаю Всем Счастья</button>
            <?php } ?>




        </div>
    </div>


    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/conditions/holo.png', true),
        'title'       => $this->title,
        'description' => 'Любое живое существо наблюдающее Единый Божественный Мировой Союз находящееся в этой
                Вселенной прошлого настоящего и будущего, формирующее мысли о нем или так или иначе связанные с ним
                автоматически в одностороннем порядке принимает условия нижеследующего соглашения.',
    ]) ?>
</div>
