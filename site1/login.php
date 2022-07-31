<?php
//print_r($_POST);// для проверки
//echo "<br>";
$login1 = null;
$pass1 = null;
$login0 = '21232f297a57a5a743894a0e4a801fc3';// admin
$pass0 = '21232f297a57a5a743894a0e4a801fc3';// admin
if (isset($_POST['login']) and isset($_POST['password'])){
    $login1 = md5($_POST['login']);
    $pass1 = md5($_POST['password']);
}

if (($login1 == $login0) and $pass1 == $pass0){

    include_once 'login_ok.php';
    echo "Добро пожаловать";
    echo "<br>";
}else
    include_once 'login_error.php';
?>
<?php
include_once 'inc/header.php';
?>
<main>

    <form action="" method="post">
        Введите логин
        <br>
        <input type="text" name="login" value="default">
        <br>
        Введите пароль
        <br>
        <input type="password" name="password" value="default">
        <br>
        <input type="submit">

    </form>
</main>
<?php
include_once 'inc/footer.php';
?>
