<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="sin.php" method="post" class="sign-up">
      <h1 class="sign-up-title"></h1>
      
      <input type="text" class="sign-up-input" name="full_name" id="name" placeholder="Введите имя" autofocus="">
      <input type="text" class="sign-up-input" name="age" id="age" placeholder="Возраст">
      <button type="submit"  class="sign-up-button">Задать</button>
      
    </form>
</body>
</html>