<?php
include_once 'inc/header.php';
//$_COOKIE['page'] = 'indexqq.php';
?>
<?php
session_start();
setcookie('page', $_COOKIE['page'], time() +3600*24*7 );
$login1 = null;
$pass1 = null;
$login0 = '21232f297a57a5a743894a0e4a801fc3';// admin
$pass0 = '21232f297a57a5a743894a0e4a801fc3';// admin
if (isset($_POST['login']) and isset($_POST['password'])){
    $_SESSION['login1'] = md5($_POST['login']);
    $_SESSION['pass1'] = md5($_POST['password']);
}

if (($_SESSION['login1']  == $login0) and $_SESSION['pass1'] == $pass0){

    include_once 'login_ok.php';
//    echo "Добро пожаловать";
    echo "<br>";
}else
    include_once 'login_error.php';
?>

<main>
<br>
    <div class="auth">
    <form action="" method="post" >
       Логин
        <br>
        <input type="text" name="login" value="default" placeholder="Введите логин" style="width: 450px" >
        <br>
        Пароль
        <br>
        <input type="password" name="password" value="default" placeholder="Введите пароль" style="width: 450px">
        <br>
        <br>
        <button style="width: 455px;">Войти</button>

    </form>
    </div>
</main>
<?php
include_once 'inc/footer.php';
?>
