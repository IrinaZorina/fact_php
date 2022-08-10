<?php
session_start();
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
<form action="task.php" method="post" class="include">
    <input type="text" name="name" id="name" placeholder="Введите имя">
    <input type="text" name="age" id="age" placeholder="Возраст">
    <button type="submit">Внести в бд</button>
</form>
</body>
</html>
