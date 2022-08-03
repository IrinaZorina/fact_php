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
	<title>Doc</title>
</head>
<body>
	<h1>Hello! U r on index!</h1>
	<?php
		print_r('Последнее посещение было '.$diff.'секунд назад');
	?>
	
</body>
</html>

