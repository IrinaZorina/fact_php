<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ЗАДАНИЕ, КАРТИНКА (день/ночь</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

//Необходимо задать изменение картинки у всего сайта (body), если день - дневная картинка, если ночь - то ночная картинка.



function changebody () {
    $time2 = date("G");

//    echo gettype($time2)."<br>";
//    echo "Вывод метки времени, функции time: <br>";
//    print_r($time2);

    if ($time2 >= 7 && $time2 <= 19) {
        $color = "yellow";
        return $color;
    } else {
        $color = "grey";
        return $color;
    }
}



?>

<body style="background-color: <? changebody(); ?>">

<header>
    <h1>ВЫПОЛНЕНИЕ ЗАДАНИЙ ПО PHP</h1>


</header>

<nav>
    <div class="nav_item"><a href="index.php">ГЛАВНАЯ</a></div>
    <div class="nav_item"><a href="about/about.php">ОБО МНЕ</a></div>
    <div class="nav_item"><a href="picture.php">КАРТИНКА (утро/ночь)</a></div>
    <div class="nav_item"><a href="tasks1-4.php">ЗАДАНИЕ (1-4)</a></div>
    <div class="nav_item"><a href="task-14072022.php">ДОП. ЗАДАНИЯ ПО PHP</a></div>
    <div class="nav_item"><a href="form.php">ФОРМА АВТОРИЗАЦИИ</a></div>
    <div class="nav_item"><a href="bd.php">БАЗА ДАННЫХ</a></div>
</nav>

<section>

    <h2>ВЫВОД КАРТИНКИ</h2>

    <?php
    function changepicture($yourtime) {
//        $time = getdate();
//        $current_time = $time['hours'];
//        echo "Текущее время: " . $current_time;

        if($yourtime <= 8 AND $yourtime >=20){
            $img = 'img/night-image.jpg';
            echo $img;
        } else {
            $img = 'img/day-image.jpg';
            echo $img;
        }

        //Сделано
        //Но почему-то не меняется картинка.
    }


    ?>

    <img src="<?php changepicture(5); ?>">

</section>

</body>
</html>