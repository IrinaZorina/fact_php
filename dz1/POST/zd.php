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
      <h1 class="sign-up-title">Задание 1</h1>
      
      <input type="text" class="sign-up-input" name="login" id="login" placeholder="Введите логин" autofocus="">
      <p><textarea name="cooment" id="com" cols="25" rows="2"></textarea></P>
      <p><input type="checkbox" value="hello" name="chek">Привет</p>
        <p><input type="checkbox" value="bye" name="chek">Пока</p>
        <p><input type="radio" value="hello" name="chek">Привет</p>
        <p><input type="radio" value="bye" name="chek">Пока</p>
        <p>
            <select name="type">  
            <option value="HTML">HTML</option>
            <option value="GIT">GIT</option>
            <option value="PHP">PHP</option>
            </select>
        </p>
      <input type="password" class="sign-up-input" name="pass" id="pass" placeholder="Введите пароль">
      <p><button type="submit"  class="sign-up-button">Зарегистрироваться</button></p>
     
    </form>
       </div>
  </body>





</html>