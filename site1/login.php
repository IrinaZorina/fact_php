<?php
session_start();
include_once 'inc/header.php';
include_once 'bd_conn.php';
include_once 'auth.php'
?>
<?php

setcookie('page', $_COOKIE['page'], time() +3600 );
$login1 = null;
$pass1 = null;

if (isset($_POST['login']) and isset($_POST['password'])){
    $_SESSION['login1'] = md5($_POST['login']);
    $_SESSION['pass1'] = md5($_POST['password']);
}
$auth1 = new auth();
    $auth1 ->login_1 = $_SESSION['login1'];
    $auth1 ->pass_1 = $_SESSION['pass1'];
//проверяю пользователя и пароль в базе
// login = admin, pass = admin
$rows_found = $auth1 ->check_user();
//echo $rows_found;
//var_dump($auth1);

if ($rows_found > 0){
        include_once 'login_ok.php';
//        echo "Добро пожаловать";
//         echo "<br>";
}else{
    include_once 'login_error.php';
}

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
        <br>
        <br>
        <a href="logout.php"><h3>Выход</h3></a>

    </form>
    </div>
</main>
<?php
include_once 'inc/footer.php';
?>
