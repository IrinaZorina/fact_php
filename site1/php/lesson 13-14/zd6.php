<?php
echo '<hr>';
echo "задача 6";
echo '<br>';
session_start();
$_SESSION['time'] = date('Y-m-d H:i:s');
session_abort();

 $val = isset($_GET['val']) ? $_GET['val'] : '';

if ($_GET['val'] == null) {
    $val = "'Тут должно быть имя'";
}
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
    <?php echo $val ?>, последний раз вы заходили <?php echo $_SESSION['time'] ?>
</h1>
<form action="">
    Введите логин <input type="text" name="val" value="<?php echo $val?>">
    <input type="submit">
</form>
</body>
</html>
