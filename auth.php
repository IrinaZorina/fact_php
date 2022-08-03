<?php 
		
		if(isset($_POST['login']) && $_POST['login']==$existed_user) {
			 header("Location: hello.php"); exit;
		} 
?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<label>Регистрация</label>
	<form action="" method="post">
		<p>
			login <input type="text" name="login"><br>
		</p>
		<p>
			password <input type="text" name="password"><?php $_POST['password']=md5($_POST['password']); ?><br>
		</p>
		<p>
			<button type="submit">SEND</button>
		</p>
		</p>
	</form>

<?php
	print_r($_POST);
	$existed_user = "admin";
	if ($_POST['login']!=$existed_user){
		echo "Вы успешно зарегистрированы!<br>";
	} else {
		echo "Вы уже регистрировались ранее на этом сайте!<br>";
	}
	print_r($_POST);
?>	


	<label>Авторизация</label>
	<form action="" method="post">
		<p>
			login <input type="text" name="login1"><br>
		</p>
		<p>
			password <input type="text" name="password1"><br>
		</p>
		<p>
			<button type="submit">SEND</button>
		</p>
		</p>
	</form>
<?php
	print_r($_POST);
?>
<?php
	echo "Последнее посещение -" .$_COOKIE['last'];
?>
</body>
</html>