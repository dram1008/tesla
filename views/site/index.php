<?php

/* @var $this yii\web\View */

$this->title = 'Тесла Ген';
$this->registerJs("$('.carousel').carousel()");
?>
<div class="site-index">
    <h1 class="page-header"><?= \yii\bootstrap\Html::encode($this->title) ?> <small>энергосистемы и источники питания здесь и сейчас</small></h1>

    <?php $this->registerJs("$('.carousel').carousel()"); ?>
    <div id="carousel-example-generic" class="carousel slide thumbnail" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/images/controller/site/index/2.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="/images/controller/site/index/1.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="/images/controller/site/index/3.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item">
                <img src="/images/controller/site/index/4.jpg" alt="...">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <img src="/images/controller/site/index/f3.jpg" class="img-circle center-block" width="140" height="140"/>
            <h2 class="center-block text-center">Нет топлива</h2>
            <p class="center-block text-center">Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива. Для выработки электроэнергии также нет необходимости во внешней энергии ветра, солнца, воды и т.п.</p>
        </div>
        <div class="col-lg-4">
            <img src="/images/controller/site/index/f4.jpg" class="img-circle center-block" width="140" height="140"/>
            <h2 class="center-block text-center">Тихий</h2>
            <p class="center-block text-center">Уровень шума в момент регулирования<br> не более 30 дБ<br>для сравнения Тихий шепот	- 35 дБ, Спокойный разговор - 70 дБ</p>
        </div>
        <div class="col-lg-4">
            <img src="/images/controller/site/index/f5.jpg" class="img-circle center-block" width="140" height="140"/>
            <h2 class="center-block text-center">Работает всегда</h2>
            <p class="center-block text-center">Время работы не ограничено. Расчетный срок службы от 10 лет</p>
        </div>
    </div>

    <hr>

    <p>Общий принцип работы самозапитки: работа ротовертера + умножитель энергии.</p>

    <p>Аккумулятор служит только для запуска генератора. При отключении аккумулятора может работать. Время работы
        неограниченно.</p>

    <p>Рабочий диапазон температуры окружающей среды, °С -35...+40</p>

    <p>Гарантия: 3 года</p>

    <p>Услуги сервисного обслуживания</p>

    <h2 class="page-header">Цены</h2>


    <table class="table table-hover table-striped" style="width: 100%; max-width: 500px;">
        <tr>
            <th>Мощность, кВт</th>
            <th>Напряжение, В</th>
            <th>Цена, тыс. руб</th>
        </tr>
        <tr>
            <td>1</td>
            <td>220</td>
            <td>70</td>
        </tr>
        <tr>
            <td>2</td>
            <td>220</td>
            <td>100</td>
        </tr>
        <tr>
            <td>4</td>
            <td>220</td>
            <td>120</td>
        </tr>
        <tr>
            <td>5</td>
            <td>220</td>
            <td>140</td>
        </tr>
        <tr>
            <td>10</td>
            <td>220</td>
            <td>270</td>
        </tr>
        <tr>
            <td>25</td>
            <td>220</td>
            <td>470</td>
        </tr>
        <tr>
            <td>50</td>
            <td>220</td>
            <td>500</td>
        </tr>
        <tr>
            <td>10</td>
            <td>380</td>
            <td>450</td>
        </tr>
        <tr>
            <td>20</td>
            <td>380</td>
            <td>900</td>
        </tr>
        <tr>
            <td>50</td>
            <td>380</td>
            <td>1 500</td>
        </tr>
        <tr>
            <td>100</td>
            <td>380</td>
            <td>4 500</td>
        </tr>
    </table>

    <h2 class="page-header">Принцип работы</h2>
    <div class="row">
        <div class="col-lg-4">
            <img src="public_html/images/controller/site/index/p.jpg" width="100%" class="thumbnail"/>
        </div>
        <div class="col-lg-8">
            <p>Есть генератор.</p>
            <p>Он соединен напрямую с двигателем который его раскручивает.</p>
            <p>Генератор питает двигатель.</p>
            <p>Генератор вырабатывает в четыре раза больше чем потребляет двигатель.</p>
            <p>Получаемая разница и идет на выход.</p>
            <p>Для исключения потерь существует умножитель энергии, который построен на магнитах, которые отталкиваясь друг от друга дают дополнительный импульс движения (это и есть секретная формула Теслы которую мы освоили). Все это обеспечивается встроенной электроникой.</p>
            <p>Заводится от аккамулятора. Потом работает автономно и выдает бесконечно указанную мощность.</p>
        </div>
    </div>


    <hr>

    <div class="jumbotron">
        <h1>Заказ:</h1>
        <p>+7 (925) 237-45-01 Дмитрий Анатольевич</p>

        <p>+7 (926) 518-98-75 Денис Валерьевич</p>
        <p><a class="btn btn-primary btn-lg" href="/production" role="button">Выбрать модель</a></p>
    </div>


    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/controller/site/index/2.jpg', true),
        'title'       => 'Купить генератор Теслы',
        'description' => 'Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива. Время работы не ограничено. Не нужно ветра, солнца, воды и т.п.',
    ]) ?>

</div>
