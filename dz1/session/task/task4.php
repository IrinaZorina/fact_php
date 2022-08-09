<?php
session_start();
if (!isset($_POST['n3'])){
  print_r("Error"); exit;
} else {
  $cntr=$_POST['n3'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Сайт</title>
</head>
<body>
<form action="" method="post">
  <h1>Hello! </h1>
  <?php
    print_r('Логин пользователя: '.$_SESSION['task1']);
    echo '<br>';
  ?>
  <?php
    print_r('Имя пользователя :'.$_SESSION['task2']);
    echo '<br>';
  ?>
  <?php
    print_r('Место работы: '.$cntr);
    echo '<br>';
  ?>
</body>
</html>