<?php
session_start();
require_once 'authorization.php';
if (isset($_POST['sub'])){
    $log = $_POST['log'];
    $pass = md5($_POST['pass']);
    $admin_log = "admin";
    $admin_pass = "123";
    if($log == $admin_log && $pass == md5($admin_pass)){
        $pass = md5($pass);
//        header('Location: index.php');
        $_SESSION['user'] = 'Welcome, ' . $admin_log . '!';
        header('Location: index.php');
    }else {
        if (isset($_SESSION)) {
            $_SESSION['message'] = 'wrong login or password';
            header('Location: authorization.php');
        }
    }
}
?>