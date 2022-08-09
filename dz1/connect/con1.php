<?php
$servername = "localhost";
$database = "test";
$username = "admin";
$password = "12345";
// Создаем соединение
echo'<pre>';
$conn1 = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn1, "utf8");
// Проверяем соединение

if (!$conn1) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>