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
                    <img src="/images/logo.png">
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
                        ['label' => 'Доставка', 'url' => ['site/dostavka']],
                        ['label' => 'Сервис', 'url' => ['site/service']],
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
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Тесла Ген <?= date('Y') ?> &middot; <a href="http://www.galaxysss.ru/">Галактический Союз Сил Света</a> &middot; <a href="http://www.laxsmi.ru/">Progressive Spirit</a></p>

    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
