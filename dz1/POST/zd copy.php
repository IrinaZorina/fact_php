<?php
 $a= $_POST['login'];
 $b= $_POST['password'];
print_r($a);
$b=md5($b['password']);
echo$b;
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
      <input type="password" class="sign-up-input" name="password[]" id="password[]" placeholder="Введите пароль">
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