<?php
print_r($_POST);
echo "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<form action="#" method="post" class="sign-up">
      <h1 class="sign-up-title">Регистрация</h1>
      
      <input type="text" class="sign-up-input" name="login" id="login" placeholder="Введите логин" autofocus="">
      <input type="text" class="sign-up-input" name="name" id="name" placeholder="Введите имя">
      <input type="password" class="sign-up-input" name="pass" id="pass" placeholder="Введите пароль">
      <button type="submit"  class="sign-up-button">Зарегистрироваться</button>
      
    </form>
   
</body>





</html>