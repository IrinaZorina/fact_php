<!doctype html>
<html lang="en">
<head>
    <?php
    // не нашел как ввести наш часовой пояс 'Etc/GMT+5' не работает
    date_default_timezone_set('UTC');
    $cur_time = date('H');
    //для отладки
    //    $cur_time = 10;
    //    echo $cur_time;

    if ($cur_time >=8 & $cur_time < 20 ) {

        echo "<link rel='stylesheet' href='styles/style_day.css'>";

    }
    else {
        echo "<link rel='stylesheet' href='styles/style_night.css'>";
    }
    ?>
    <link rel="stylesheet" href="styles/styles_table.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My page</title>
</head>
<body>
<header>
    <section class="header_grid">
        <div class="cycles"><a href="cycles.php"><h1> Задачи PHP</h1></a></div>
        <div class="logo"><img src="images/2.png" style="width:150px;"></div>
        <div class="Masterskaya"><h1> <a href="index.php">Мастерская 3D печати</a></h1></div>
        <div class="link"> <a href="table.php">Таблица Менделеева</a></div>
    </section>
</header>