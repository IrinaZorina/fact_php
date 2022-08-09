<?php

$name=$_POST['name'];
$age=$_POST['age'];
$add1= "INSERT INTO citi (name, age) VALUES ('$name','$age')";
mysqli_query($conn, $add1 );

$servername = "localhost";
$database = "test";
$username = "admin";
$password = "12345";
// Создаем соединение
echo'<pre>';
$conn = mysqli_connect($servername, $username, $password, $database);
echo'<br>';
// Проверяем соединение

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo'</pre>';
mysqli_set_charset($conn, "utf8");
$select= "SELECT * FROM citi";
$name = "SELECT name FROM citi";
$add= "INSERT INTO citi (name, age) VALUES ('root',32)";
$arr= mysqli_fetch_all(mysqli_query($conn,$name ), MYSQLI_ASSOC);
foreach ($arr as $key => $value ){
    echo implode($value) . '<br>';
}

?>
