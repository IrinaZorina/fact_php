
<?php
include_once 'inc/header.php';
session_start();
?>
<main>
<div class="auth1">
<!--    <h1>Вход успешен!</h1>-->
    <h1>Добро пожаловать!</h1>
    <h1>Последняя посещенная страница: <?php echo $_COOKIE['page']?></h1>
</div>
</main>
<?php
//include_once 'inc/footer.php';
//?>
