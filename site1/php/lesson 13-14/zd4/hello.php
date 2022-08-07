<?php
echo '<hr>';
echo "задача 4";
echo '<br>';
session_start();
$name = $_SESSION['name'] ;





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
Привет, <?php echo $name; ?>
</body>
</html>
