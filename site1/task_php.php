<?php
include_once 'inc/header.php';
session_start();
$_COOKIE['page'] = 'task_php.php';
setcookie('page', $_COOKIE['page'], time() +3600*24*7 );
?>




<main>
    <h1>Оглавление</h1>
    <br>
    <p><a href="php/lesson%203-4.php">PHP - Управляющие конструкции</a></p>
    <p>Урок 3-4</p>

    <p><a href="php/lesson%205-6.php">PHP - Массивы</a></p>
    <p>Урок 5-6</p>

    <p><a href="php/lesson%207-8.php">PHP - Строки</a></p>
    <p>Урок 7-8</p>

    <p><a href="php/lesson%209-10.php">PHP - Функции</a></p>
    <p>Урок 9-10</p>

    <p><a href="php/lesson%2011-12/lesson%2011-12.php">Работа с данными от клиента GET POST</a></p>
    <p>Урок 11-12</p>

    <p><a href="php/lesson%2013-14/lesson%2013-14.php">Работа с данными от клиента</a></p>
    <p>Урок 13-14</p>
    <br>

</main>




<?php
include_once 'inc/footer.php';
?>

