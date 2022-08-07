<?php
echo '<hr>';
echo "задача 0";
echo '<br>';
session_start();
$_SESSION['task1'] = $_POST['task1'];





?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="task3.php" method="post">
    2+2 =
    <input type="text" name="task2">
    <input type="submit">
</form>
</body>
</html>