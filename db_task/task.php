<?php
session_start();
$connect = Null;
require_once 'connect.php';
$name = $_POST['name'];
$age = $_POST['age'];
mysqli_query($connect,"INSERT INTO `taskbd` (`id`, `name`, `age`) VALUES (NULL, '$name', '$age')");
?>