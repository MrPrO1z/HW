<html lang="">
<head>
    <?
    require '../db_connect.php';
    ?>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <header>
        <div>
            <h1 class="lesson-name">Уроки по PHP</h1>
            <?
            echo '<ul>'. $cat_menu .'</ul>';
            ?>
        </div>
    </header>
</body>
