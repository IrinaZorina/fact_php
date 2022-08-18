<?php
session_start();
include_once 'inc/header.php';
include_once 'bd_conn.php';
include_once 'auth.php';
//unset($_SESSION['login1']);
//unset($_SESSION['pass1']);
$_SESSION['login1'] = null;
$_SESSION['pass1'] = null;
header('Location: login.php');
?>









<?php
include_once 'inc/footer.php';
?>
