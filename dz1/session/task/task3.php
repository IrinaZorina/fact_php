<?php
session_start();
if (isset($_POST['n2'])){
$_SESSION['task2']=$_POST['n2'];}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Сайт</title>
</head>
<body>
<form action="task4.php" method="post">
  <p>
    Место работы <input type="text" name="n3"><br>
  </p>
    <p>
    <button type="submit">Дальше</button>
  </p>
  </p>
  </form>


</body>
</html>