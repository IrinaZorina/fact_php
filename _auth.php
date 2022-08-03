<?php 
		
		if($_POST['password']=='123' && $_POST['login']=='Admin') {
			 header("Location: _auth-hello.php"); 
			 print_r($_POST);
			 exit;
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
<form action="" method="post">
	<p>
	Логин <input type="text" name="login"><br>
	</p>
	<p>
		password <input type="text" name="password"><?php $_POST['password']=md5($_POST['password']); print_r($_POST); ?><br>
	</p>
		<p>
		<button type="submit">SEND</button>
	</p>
	</p>
	</form>
	<form action="_birtix.php">
	   		<button>Переход к bitrix</button><br>
	 </form>
	<form action="_fact.php">
	   		<button>Переход к fact</button><br>
	<?php echo "Последний раз была посещена страница ".$_COOKIE['last']; ?>   		
 </form>
</body>
</html>