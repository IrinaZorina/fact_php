<?php
session_start();
if (isset($_POST['n1'])){
$_SESSION['task1']=$_POST['n1'];}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Сайт</title>
</head>
<body>
<form action="task3.php" method="post">
  <p>
    Фамилия <input type="text" name="n2"><br>
  </p>
    <p>
    <button type="submit">Дальше</button>
  </p>
  </p>
  </form>


</body>
</html>