<?php

if (isset($_GET['val'])){
	$login=$_GET['val'];
	$time=date('d-m-Y H:i:s');
	setcookie('name', $login , time()+3600);
	setcookie('dateTime', $time , time()+3600);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Сайт</title>
</head>
<body>
	<form action="" method="get">
		Логин <input type="text" name="val" value="<?php echo isset($_GET['val']) ? $_GET['val']: '' ?>">
	<input type="submit">
	</form>
</body>
</html>
