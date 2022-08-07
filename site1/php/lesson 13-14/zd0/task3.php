<?php
echo '<hr>';
echo "задача 0";
echo '<br>';
session_start();
$_SESSION['task2'] = $_POST['task2'];

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
<form action="result.php" method="post">
    3+3 =
    <input type="text" name="task3">
    <input type="submit">
</form>
</body>
</html>