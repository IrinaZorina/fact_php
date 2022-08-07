
<?php
echo '<hr>';
echo "задача 2";
echo '<br>';
$last = isset($_COOKIE['last']) ? $_COOKIE['last'] : 'никогда';

setcookie('last', date('Y-m-d H:i:s'), time()+3600*24*31, '/');
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

<h1>
    <?php echo $_GET['val'] ?>, последний раз вы заходили <?php echo $last; ?>
</h1>
<form action="">
    Введите логин <input type="text" name="val" value="<?php echo isset($_GET['val']) ? $_GET['val'] : ''?>">
    <input type="submit">
</form>
</body>
</html>