<?php

if (isset($_GET['val'])){
	$login=$_GET['val'];
	setcookie('name', $login , time()+3600);
	setcookie('time', date('H') , time()+3600);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
	<h1>Hello! U r on index!</h1>
	<form action="">
		Логин <input type="text" name="val" value="<?php echo isset($_GET['val']) ? $_GET['val']: '' ?>">
		<input type="submit">
	</form>
	<form action="about.php">
	   	<button>Переход к странице about</button>
	</form>
<?php
	echo date('H');
	print_r($_COOKIE);
?>
</body>
</html>

<!-- //	session_start();
//$_SESSION['name']='Kate';
	//$_SESSION['pass']=123; -->
/*	setcookie('age', '10', time()+3600*24*7);
	setcookie('surname', 'Smith', time()+3600*24*7);
	*///setcookie('name', $nameForm, time()+3600*24*7);