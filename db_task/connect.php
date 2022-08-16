<?php
$hostname = 'localhost';
$username = 'Ivan';
$password = '123';
$dbname = 'taskdb';
$connect = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($connect, "utf8");
if (!$connect){
    die("Все плохо" . mysqli_connect_error());
}
echo "Все хорошо";
?>
