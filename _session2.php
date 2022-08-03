<?php
session_start();
$time=date('h:i:sa');
$_SESSION['time']=$time;
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
		print_r('Последнее посещение было '.$_SESSION['time']);
	?>
</body>
</html>

