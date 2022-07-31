<?php
//print_r($_POST);
//echo "<br>";

$login0 = '21232f297a57a5a743894a0e4a801fc3';// admin
$pass0 = '21232f297a57a5a743894a0e4a801fc3';// admin
//$login1 = 0;
//$pass1 = 0;

    $login1 = md5($_POST['login']);
    $pass1 = md5($_POST['password']);

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
        <input type="text" name="login" >
        <br>
        Введите пароль
        <br>
        <input type="password" name="password" >
        <br>
        <input type="submit">

    </form>
</main>
<?php
include_once 'inc/footer.php';
?>
