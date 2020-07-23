<html>
<head>
    <title>Уроки по PHP</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div>
    <?php
    include '../view/header.php';
    //Home work

    /*
    * 1) посчитать количество повторений в строке выражения Твин Пикс
    * 2) заменить в строке Твин Пикс на Twin Peaks
    * 3) посчитать количество символов в строке
    * 4) посчитать количество символов без пробелов в строке
    * 5) убрать html-теги (<p>) в строке
    * 6) вывести строку в браузере как html-код
    * 7) первое слово "В" в начале тексте должно быть с большой буквы
    *
    * каждое задание вывести как заголовок h2 и под ним готовое решение
    * заголовок h2 - синим цветом
    * решение - темно-серым
    * ---------------------------------------------------------------------------------------------------------
    * !!!!!!!!!!!!!!!!    НАСТРОЙТЬ ГИТ В ШТОРМЕ     !!!!!!!!!!!!!!!!!!!!
    * !!!!!!!!!!!!! КОД ЧТОБ НЕ ПЕРЕСЕКАЛ ЛИНИЮ ОГРАНИЧЕНИЯ СПАРВА !!!!!!!!!!!!!!!
    * <?php ДОЛЖНО ОТКРЫВАТЬСЯ ОДИН РАЗ
    * class="exercise" должен быть посередине и используй любой другой шрифт
    * class="answer" отступ слева 15px и class="exercise" от 20px
    * class="lesson-name" сделай курсивом и каждая первая буква заглавная
    * class="wrapper" сделай рамку и закругли края у рамки на 5px
    * вывод ответа должен быть реализован функцией printf
    * комментируй код Сцука что ты делаешь в каждом выполнении задания
    */

    $content = '<div class="wrapper"> %s </div>';
    //ормально отфармотировать
    $mainString = '<p>в том же 1990 году стартовал первый телесериал Линча — Твин Пикс. В основе сюжета сериала —'
        . ' расследование загадочного убийства школьницы Лоры Палмер, произошедшего в небольшом американском городке' .
        ' Твин Пикс. Сериал пользовался поначалу большим успехом, но уже через год съёмки были свёрнуты из-за низких' .
        ' рейтингов. Тем не менее сериал стал знаковым культурным явлением начала 1990-х. Ежегодно под Сиэтлом' . '
        проходит слёт поклонников Твин Пикса</p>';
    //трогать нельзяS
    echo '<h1 class="lesson-name">home work #2</h1>';

    $wrapper0 = '<span class="exercise">Исходник Урока</span>';

    $wrapper0 .= '<div><h4 class="answer">' . htmlentities($mainString) . '</h4></div>';

    printf($content, $wrapper0);

    $wrapper = '<span class="exercise">1) посчитать количество повторений в строке выражения Твин Пикс</span>';
    //считаю количество повторений строки
    $wrapper .= '<div><h4 class="answer">' . substr_count($mainString, 'Твин Пикс') . '</h4></div>';

    printf($content, $wrapper);

    $wrapper2 = '<span class="exercise">2) заменить в строке Твин Пикс на Twin Peaks</span>';

    $wrapper2 .= '<div><h4 class="answer">'
        . $replace = str_replace('Твин Пикс', 'Twin Peaks', $mainString) . '</h4></div>';

    printf($content, $wrapper2);

    $wrapper3 = '<span class="exercise">3) посчитать количество символов в строке</span>';

    $wrapper3 .= '<div><h4 class="answer">' . strlen($mainString) . '</h4></div>';

    printf($content, $wrapper3);

    $wrapper4 = '<span class="exercise">4) посчитать количество символов без пробелов в строке</span>';

    $replace = str_replace(' ', '', $mainString);

    $wrapper4 .= '<div><h4 class="answer">' . strlen($replace) . '</h4></div>';

    printf($content, $wrapper4);

    $wrapper5 = '<span class="exercise">5) убрать html-теги (&lt;p&gt;) в строке</span>';

    $wrapper5 .= '<div><h4 class="answer">' . $replace2 = str_replace('<p>', '', $mainString)
            . '</h4></div>';

    printf($content, $wrapper5);

    $wrapper6 = '<span class="exercise">6) вывести строку в браузере как html-код</span>';

    $wrapper6 .= '<div><h4 class="answer">' . htmlentities($mainString) . '</h4></div>';

    printf($content, $wrapper6);

    $wrapper7 = '<span class="exercise">7) первое слово "В" в начале тексте должно быть с большой буквы</span>';

    $textWithoutFirstLetter = mb_substr(strip_tags($mainString), 1);

    $firstLetter = mb_strtoupper(mb_substr(strip_tags($mainString), 0, 1));

    $wrapper7 .= '<div><h4 class="answer">' . $firstLetter . $textWithoutFirstLetter . '</h4></div>';

    printf($content, $wrapper7);

    include '../view/footer.php';
    ?>
</div>
</body>


