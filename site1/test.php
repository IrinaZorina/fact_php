<?php
session_start();
include_once 'bd_conn.php';
include_once 'auth.php';
$auth11 = new auth();
$auth11 ->login_1 = ($_SESSION['login1']);
$auth11 ->pass_1 = ($_SESSION['pass1']);

//проверяю пользователя и пароль в база
$rows_found = $auth11 ->check_user();
echo $rows_found;
echo '<br>';
