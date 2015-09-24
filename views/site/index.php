<?php

/* @var $this yii\web\View */

$this->title = 'Тесла Ген';
?>
<div class="site-index">
    <h1 class="page-header"><?= \yii\bootstrap\Html::encode($this->title) ?></h1>

    <img src="/images/1.jpg" class="thumbnail" width="100%"/>


    <p>Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива.</p>

    <p>Для выработки электроэнергии также нет необходимости во внешней энергии ветра, солнца, воды и т.п.</p>

    <p>Время работы не ограничено.</p>

    <p>Общий принцип работы самозапитки: работа ротовертера + умножитель энергии.</p>

    <p>Аккумулятор служит только для запуска генератора. При отключении аккумулятора может работать. Время работы
        неограниченно.</p>

    <p>Рабочий диапазон температуры окружающей среды, °С -35...+40</p>

    <p>Уровень шума в момент регулирования, дБ < 30</p>

    <p>Расчетный срок службы 10 лет</p>

    <p> Гарантия: 3 года</p>

    <p>Услуги сервисного обслуживания</p>

    <p>Изготовление 35-40 дней.</p>

    <p>Цены</p>


    <table class="table table-hover table-striped" style="width: 300px">
        <tr>
            <th>кВт</th>
            <th>тыс руб</th>
        </tr>
        <tr>
            <td>1</td>
            <td>70</td>
        </tr>
        <tr>
            <td>2</td>
            <td>100</td>
        </tr>
        <tr>
            <td>4</td>
            <td>120</td>
        </tr>
        <tr>
            <td>5</td>
            <td>140</td>
        </tr>
        <tr>
            <td>10</td>
            <td>270</td>
        </tr>
        <tr>
            <td>25</td>
            <td>470</td>
        </tr>
        <tr>
            <td>50</td>
            <td>500</td>
        </tr>
        <tr>
            <td>10/380</td>
            <td>450</td>
        </tr>
        <tr>
            <td>20/380</td>
            <td>900</td>
        </tr>
        <tr>
            <td>50/380</td>
            <td>1500</td>
        </tr>
        <tr>
            <td>100/380</td>
            <td>4500</td>
        </tr>
    </table>

    <hr>

    <p>Заказ: </p>

    <p>+7-925-237-45-01 Дмитрий Анатольевич</p>

    <p>+7-926-518-98-75 Денис Валерьевич</p>

    <hr>
    <?= $this->render('../blocks/share', [
        'url'         => \yii\helpers\Url::current([], true),
        'image'       => \yii\helpers\Url::to('/images/1.jpg', true),
        'title'       => 'Купить генератор Теслы',
        'description' => 'Электрогенератор вырабатывает электроэнергию, не потребляя какого-либо топлива. Время работы не ограничено. Не нужно ветра, солнца, воды и т.п.',
    ]) ?>
</div>
