<?php
session_start();

if (!isset($_SESSION['time'])){
	$_SESSION['time']=date('Y-m-d h:i:s');
	} 	
		$time2=date('Y-m-d h:i:s');
		$diff=strtotime($time2)-strtotime($_SESSION['time']);
		
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Сайт</title>
</head>
<body>
	<h1>Hello! Рады видеть тебя!</h1>
	<?php
		print_r('Пользователь зашёл на сайт '.$diff.'секунд назад');
	?>
	
</body>
</html>

