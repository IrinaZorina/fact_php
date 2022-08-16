<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ПЕРВЫЙ УРОК PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

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








<br>
<br>

<?php

$a = 7;
$b = 3;
$c = $a/$b;
$c = (int) $c;
echo ($c);
var_dump($c);

echo "<br>";

$d = 5;
$e = 6;
var_dump ($d == $e);
echo "<br>";
echo (int) ($d == $e);

echo "<br>";

$h = 5.0;
$k = 5;
echo (int) ($h === $k);


?>


<?php

$name = 'Yuriy';
$age = '36';
$pi = define('PI', 3.14);


?>

<h1><?php echo ($name); ?></h1>

<h2><?php echo ($age); ?></h2>


<h3><?php echo PI ?></h3>




<br>

<br>







</body>
</html>

