<?php
 
print_r (md5($_POST['pass']));


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
    
      
      <input type="text" class="sign-up-input" name="login[]" id="login[]" placeholder="Введите логин" autofocus="">
      <input type="password" class="sign-up-input" name="pass[]" id="pass[]" placeholder="Введите пароль">
      <?php
      echo "<br>";
if (isset($_POST['login']))
foreach ($_POST['login'] as $value){
    echo $value."<BR>";
}

echo "<br>";
if (isset($_POST['password']))
foreach ($_POST['password'] as $value){
    echo $value."<BR>";
}
?>
 
      <button type="submit"  class="sign-up-button">Зарегистрироваться</button>
      
     
    </form>
       </div>
  </body>





</html>