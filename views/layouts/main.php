<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/images/ico.png">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" style="padding: 0px 0px 0px 0px;">
                    <img src="/images/logo.png" height="50">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?= Nav::widget([
                    'options' => ['class' => 'navbar-nav'],
                    'items'   => [
//                        ['label' => 'О проекте', 'url' => ['site/about']],
                        ['label' => 'Продукция', 'url' => ['site/production']],
//                        ['label' => 'Хозяинам домов', 'url' => ['site/house']],
//                        ['label' => 'Промышленное использование', 'url' => ['site/prom']],
                        ['label' => 'Сервис', 'url' => ['site/service']],
                        ['label' => 'Аренда', 'url' => ['site/rent']],
                        ['label' => 'Доставка', 'url' => ['site/dostavka']],
                        ['label' => 'Диллерская программа', 'url' => ['site/diller']],
                        ['label' => 'Контакты', 'url' => ['site/contact']],
//                        Yii::$app->user->isGuest ?
//                            ['label' => 'Войти', 'url' => ['site/login']] :
//                            [
//                                'label'       => 'Выйти (' . Yii::$app->user->identity->username . ')',
//                                'url'         => ['site/logout'],
//                                'linkOptions' => ['data-method' => 'post']
//                            ],
                    ],
                ]);
                ?>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="tel:+7-925-237-45-01">+7-925-237-45-01</a></li>
                    <li><a href="tel:+7-926-518-98-75">+7-926-518-98-75</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Тесла Ген <?= date('Y') ?> &middot; <a href="http://www.galaxysss.ru/">Галактический Союз Сил Света</a> &middot; <a href="http://www.laxsmi.ru/">Progressive Spirit</a> &middot;  при поддержке Архангела Метатрона и INDRA FAMILY</p>
    </div>
</footer>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-67744531-2', 'auto');
    ga('send', 'pageview');

</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
