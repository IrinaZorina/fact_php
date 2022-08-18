<?php
$hostname = 'localhost';
$username = 'Ruslan';
$password = '123';
$dbname = 'site1';
mysqli_connect($hostname, $username, $password, $dbname);
//echo '<pre>';
$connect = (mysqli_connect($hostname, $username, $password, $dbname));
mysqli_set_charset($connect, 'utf8');
//$select = "SELECT * FROM auth";
//$arr = mysqli_fetch_all(mysqli_query($con,$select), MYSQLI_ASSOC);
//echo '<pre>';
//print_r($arr);