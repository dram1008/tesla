<?php

/** @var $request \app\models\Request */
/** @var $user \app\models\User */

$product = \app\models\Product::find($request->getField('product_id'));
Yii::info(\yii\helpers\VarDumper::dumpAsString($request), 'tg\\request');
Yii::info(\yii\helpers\VarDumper::dumpAsString($product), 'tg\\product');
?>


<p>Вы сделали очередной заказ</p>
<p>Наименование: <?= $product->getField('name') ?></p>
<p>Цена: <?= $product->getField('price') ?></p>


<p>Сообщаем вам условия сотрудничества</p>

<p>Дорогие и прекрасные жители земли!</p>

<p>Для того чтобы получить шанс приобрести наш генератор Теслы или стать нашими <span style="font-size: 9.5pt; line-height: 115%; font-family: Helvetica, sans-serif;">дилерами&nbsp;</span>вам необходимо выполнить ряд условий именуемые в дальнейшем &laquo;Условия&raquo;:</p>

<p>1.&nbsp;Зарегистрироваться на сайте <a href="http://www.galaxysss.ru/">http://www.galaxysss.ru/</a>&nbsp;(все кто делали заказ на сайте&nbsp;<a href="http://tesla.galaxysss.ru/">http://tesla.galaxysss.ru/</a>&nbsp;уже там зарегистрированы, кто не завел пароль, воспользуйтесь функцией восстановить пароль&nbsp;<a href="http://www.galaxysss.ru/password/recover" target="_blank">http://www.galaxysss.ru/password/recover</a>)</p>

<p>2.&nbsp;Заполнить Карту Жизни<br />
    <img alt="" src="http://tesla.galaxysss.ru/upload/HtmlContent/tg_subscribe_history/content/00000005/1444830687_Uf32h4ZCWN.png" style="width: 100%;" /></p>

<p>3.&nbsp;Перевести 10.000 руб. по ссылке&nbsp;<a href="http://www.galaxysss.ru/thank">http://www.galaxysss.ru/thank</a></p>

<p>4.&nbsp;Уведомить о переводе и приложить ссылку на карту жизни по почте&nbsp;<a href="mailto:teslagen_step2@galaxysss.ru">teslagen_step2@galaxysss.ru</a></p>

<p>5.&nbsp;Получить дальнейшие инструкции по его получению</p>

<p>Проект Tesla Gen является началом установления Корпорации Счастья на Земле.</p>

<p>Мы строим корпорацию счастья куда входит:</p>

<ol>
    <li>
        <p>Галактический Союз Сил Света <a href="http://www.galaxysss.ru/mission">http://www.galaxysss.ru/mission</a></p>
    </li>
    <li>
        <p>Progressive Spirit Business Club Vasudev Bagavan <a href="http://www.galaxysss.ru/category/money/425">http://www.galaxysss.ru/category/money/425</a></p>
    </li>
    <li>
        <p>Город Солнца</p>
    </li>
    <li>
        <p>CAPITALOV Национальное Агенство Капиталов <a href="http://www.galaxysss.ru/category/money/430">http://www.galaxysss.ru/category/money/430</a></p>
    </li>
    <li>
        <p>СутРа Project <a href="http://www.galaxysss.ru/category/music/407">http://www.galaxysss.ru/category/music/407</a></p>
    </li>
    <li>
        <p>Школа Богов</p>
    </li>
    <li>
        <p>Университет Фрактального Бизнеса УФБ</p>
    </li>
    <li>
        <p>Аттракцион Счастья</p>
    </li>
    <li>
        <p>TeslaGen<a href="http://tesla.galaxysss.ru/"> http://tesla.galaxysss.ru/</a></p>
    </li>
    <li>
        <p>Телеканал Игры Богов</p>
    </li>
    <li>
        <p>Progressive Spirit Vision</p>
    </li>
    <li>
        <p>Авиалинии БогДан &ndash; новая технология перелетов в пространстве при помощи &laquo;крыльев ангела&raquo;.</p>
    </li>
    <li>
        <p>Progresive Spirit Radio One</p>
    </li>
    <li>
        <p>Прощающая система<a href="http://www.galaxysss.ru/forgive"> http://www.galaxysss.ru/forgive</a></p>
    </li>
    <li>
        <p>Кришна Прасад &ndash; еда по принципу уважения ко всем формам жизни.</p>
    </li>
    <li>
        <p>Кристалл Телепатии &ndash; новое средство общения, работающее везде и всегда устраняющее ограничение в нахождении участников разговора.</p>
    </li>
    <li>
        <p>Галактическое Агентство Переходов &ndash; агентство, предоставляющее услуги сопровождения души в мир иной, консалтинговые услуги по действиям в промежуточном состоянии между уходом и приходом на Земле, и здоровые роды на Земли по законам космоса.</p>
    </li>
    <li>
        <p>LINEAROSSA Интерьерные решения и товары для жизни по сакральной геометрии.</p>
    </li>
    <li>
        <p>Институт Гармоничного Развития Человека</p>
    </li>
    <li>
        <p>Фонд ПОРА ЖИТЬ&nbsp;по защите: Учителей, Родителей, Стариков, Женщин, Детей, Коров, Животных.</p>
    </li>
</ol>

<p>В нашем арсенале союзников уже насчитывается 156 объединений. Они представлены здесь:&nbsp;<a href="http://www.galaxysss.ru/direction">http://www.galaxysss.ru/direction</a>. И это только начало нашего торжества&nbsp;Золотого Века и Рая на планете Земля.</p>

<p>Мы воплощаем в мир нашу стратегию эволюционного развития экономической системы планеты в принцип изобилия.</p>

<p>Как вы знаете, система экономики основана на экономии ограниченных ресурсов, в то время как принцип изобилия предполагает избыток ресурсов и потенциалов для жизни на планете Земля.</p>

<p>Как вы понимаете в рамках существующей системы контроля денежных оборотов и всех предприятий по принципу монополии идущей от ФРС мы не можем действовать быстро, поэтому действуем аккуратно, уважая и любя интересы ФРС, поэтому план воплощения проекта под кодовым названием &laquo;РАЙ ЗДЕСЬ И СЕЙЧАС&raquo; идет своим темпом и информация выдается по мере готовности человечества к ней.</p>

<p>Мы творим свой мир при поддержке Архангела Метатрона</p>

<p>В чем именно выражается?</p>

<p>Мы работаем с такими проектами как:</p>

<p>1. &laquo;Хранители Частот&raquo; (<a href="http://www.galaxysss.ru/category/study/326">http://www.galaxysss.ru/category/study/326</a>), где получаются послания по технологии ченнелинга. То есть мы являемся Хранителями Частот Любви и Света. Мы несем &laquo;Свет&raquo;. А кто вы думаете еще принесет свет на планету?</p>

<p>2. &laquo;Космическая лётная академия вознесённых владык&raquo; (<a href="http://www.galaxysss.ru/category/study/323">http://www.galaxysss.ru/category/study/323</a>), где получаются знания о сакральных принципах построения мира, а как вы знаете генератор Теслы построен именно на них.</p>

<p>3. &laquo;32 импульса Метатрона&raquo; (<a href="http://www.galaxysss.ru/category/study/402">http://www.galaxysss.ru/category/study/402</a>)</p>

<p>4. &laquo;Космические творения объединенного сознания&raquo;&nbsp;<a href="http://www.galaxysss.ru/category/house/419">&nbsp;http://www.galaxysss.ru/category/house/419</a>, где получаются знания о сакральной геометрии пространства.</p>

<p>И другие</p>

<p>В этих проектах Архангел Метатрон является одним из кураторов человечества общающийся через эти каналы.</p>

<p>В нашем мире действует правило четырех &laquo;В&raquo;: по Вере Вашей Воздастся Вам.</p>

<p>Желающих получить генератор очень много &ndash; вся Планета. Поэтому мы будем общаться с теми, кто реально подтвердит свою готовность к дальнейшему взаимодействию выполнением &laquo;Условий&raquo; указанных выше.</p>

<p>Мы несем &laquo;Свет&raquo;.</p>

<p><img alt="" src="http://tesla.galaxysss.ru/upload/HtmlContent/tg_subscribe_history/content/00000006/1444947419_jz94XKBefH.jpg" style="width: 100%;" /></p>

<p>Кто не верит до свидания, живите дальше в своем мире и мы желаем вам Счастья.</p>

