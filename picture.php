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

$b_color = "";
$time2 = date("G");
echo gettype($time2)."<br>";
echo "Вывод метки времени, функции time: <br>";
print_r($time2);

if ($time2 >= 7 && $time <= 19) {
    $b_color = "yellow";
} else {
    $b_color = "grey";
}

?>

<body style="background-color: <? echo $b_color; ?>">

<header>
    <h1>ВЫПОЛНЕНИЕ ЗАДАНИЙ ПО PHP</h1>


</header>

<nav>
    <div class="nav_item"><a href="index.php">ГЛАВНАЯ</a></div>
    <div class="nav_item"><a href="picture.php">КАРТИНКА (утро/ночь)</a></div>
    <div class="nav_item"><a href="tasks1-4.php">ЗАДАНИЕ (1-4)</a></div>
    <div class="nav_item"><a href="task-14072022.php">ДОП. ЗАДАНИЯ ПО PHP</a></div>
    <div class="nav_item"><a href="form.php">ФОРМА АВТОРИЗАЦИИ</a></div>
    <div class="nav_item"><a href="bd.php">БАЗА ДАННЫХ</a></div>
</nav>

<section>

    <h2>ВЫВОД КАРТИНКИ</h2>

    <?php
    $time = getdate();
    $current_time = $time['hours'];
    echo "Текущее время: " . $current_time;

    if($current_time <= 8 AND $current_time >=20){
        $img = 'img/night-image.jpg';
    } else {
        $img = 'img/day-image.jpg';
    }

    ?>

    <img src="<?php echo $img; ?>">

</section>

</body>
</html>