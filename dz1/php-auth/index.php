<?php 
/**error_reporting(0);*/
		
		if($_POST['password']=='root' && $_POST['login']=='root') {
			 header("Location: hello.php"); 
			 print_r($_POST);
			 exit;
		} 
?>	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/stylesra.css">
</head>
<body>
    <form action="" method="post" class="sign-up">
      <h1 class="sign-up-title">Авторизация</h1>
      
      <input type="text" class="sign-up-input" name="login" id="login" placeholder="Введите логин" autofocus="">
      <input type="password" class="sign-up-input" name="password" id="password" placeholder="Введите пароль">
      
      <?php $_POST['password']=md5($_POST['password']);
       print_r($_POST); 
       ?><br>
      
      <button type="submit"  class="sign-up-button">Войти</button>
      <p>
        У вас нет аккаунта? - <a href="reg.php">Зарегистрируйтесь!</a>
      </p>
    </form>
    <form action="fact.php"method="post" class="sign-up">
	   		<button >Переход к fact</button><br>
	 </form>
	<form action="bitrix.php"method="post" class="sign-up">
	   		<button>Переход к bitrix</button><br>
	<?php echo "Последний раз была посещена страница ".$_COOKIE['last']; ?>   		
 </form>
       </div>
  </body>





</html>