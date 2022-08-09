<?php
session_start();
require_once 'con1.php';
$full_name = $_POST['full_name'];
$age = $_POST['age'];
mysqli_query($conn1,"INSERT INTO `citi` (`id`, `name`, `age`) VALUES (NULL, '$full_name', '$age')")
?>
