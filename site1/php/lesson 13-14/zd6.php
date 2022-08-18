<?php
echo '<hr>';
echo "задача 6";
echo '<br>';
session_start();
//$_SESSION['time'] = date('Y-m-d H:i:s');
$_SESSION['time'] = time();
//session_abort();

 $val = isset($_GET['val']) ? $_GET['val'] : '';

if ($_GET['val'] == null) {
    $val = null;
}

if ($val != null) {
    $_SESSION['time1'] = time();
}

$result =  $_SESSION['time'] - $_SESSION['time1'];



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
    <?php if ($val == null){echo "No name"; }else {echo $val;} ?>, последний раз вы заходили <?php echo $result ?> секунд назад
</h1>

<form action="">
    <input type="text" name="val" value="<?php echo $val?>" placeholder="введите имя">
    <input type="submit">
</form>
Входом считается ввод имени, да сброса счетчика ввести имя и перезайти на страницу
</body>
</html>
