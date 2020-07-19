<html>
<head>
    <title>Lesson 1</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div>
    <?
    //Home work

    /*
    *1) посчитать количество повторений в строке выражения Твин Пикс
    *2) заменить в строке Твин Пикс на Twin Peaks
    *3) посчитать количество символов в строке
    *4) посчитать количество символов без пробелов в строке
    *5) убрать html-теги (<p>) в строке
    *6) вывести строку в браузере как html-код
    *7) первое слово "В" в начале тексте должно быть с большой буквы
    */
    //  каждое задание вывести как заголовок h2 и под ним готовое решение
    //  заголовок h2 - синим цветом
    // решение - темно-серым

    $content = '<div><h4> %s </h4></div>';

    $mainString = '<p>в том же 1990 году стартовал первый телесериал Линча — Твин Пикс. В основе сюжета сериала — расследование загадочного убийства школьницы Лоры Палмер, произошедшего в небольшом американском городке Твин Пикс. Сериал пользовался поначалу большим успехом, но уже через год съёмки были свёрнуты из-за низких рейтингов. Тем не менее сериал стал знаковым культурным явлением начала 1990-х. Ежегодно под Сиэтлом проходит слёт поклонников Твин Пикса</p>';
    ?>
    <div><h1><? echo 'Home Work #1'; ?></h1></div>
    <div><span><? echo '1) посчитать количество повторений в строке выражения Твин Пикс'; ?></span></div>

    <?php $count = substr_count($mainString, 'Твин Пикс');

     printf($content, $count); ?>

    <div><span><? echo '2) заменить в строке Твин Пикс на Twin Peaks'; ?></span></div>

    <? $replace = str_replace('Твин Пикс', 'Twin Peaks', $mainString);

    printf($content, $replace);?>

    <div><span><? echo '3) посчитать количество символов в строке'; ?></span></div>

    <div><h4><? echo strlen($mainString); ?></h4></div>

    <div><span><? echo '4) посчитать количество символов без пробелов в строке'; ?></span></div>

    <? $replace = str_replace(' ', '', $mainString); ?>

    <div><h4><? echo strlen($replace); ?></div>
    </h4>

    <div><span><? echo '5) убрать html-теги (&lt;p&gt;) в строке'; ?></span></div>

    <? $replace2 = str_replace('<p>', '', $mainString);
    printf($content, $replace2)?>


    <div><span><? echo '6) вывести строку в браузере как html-код'; ?></span></div>

    <div>
        <h4><?php echo htmlentities($mainString); ?></h4>
    </div>

    <div>
        <span><?php echo "7) первое слово 'В' в начале тексте должно быть с большой буквы"; ?></span>
    </div>
    <?php
    $textWithoutFirstLetter = mb_substr(strip_tags($mainString), 1);

    $firstLetter = mb_strtoupper(mb_substr(strip_tags($mainString), 0, 1));

    echo '<div><h4>' . $firstLetter . $textWithoutFirstLetter . '</h4></div>'; ?>
</div>
</body>


