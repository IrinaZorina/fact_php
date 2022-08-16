<?php
session_start();

if (!isset($_SESSION['nowtime'])){
    $_SESSION['nowtime']=date('Y-m-d h:i:s');
}
$time2=date('Y-m-d h:i:s');
$diff=strtotime($time2)-strtotime($_SESSION['nowtime']);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Сайт</title>
</head>
<body>
<h1>
<?php
print_r('Пользователь зашёл на сайт '.$diff.'секунд назад');
?>
</h1>

</body>
</html>