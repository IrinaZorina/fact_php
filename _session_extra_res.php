<?php
session_start();
print_r($_SESSION);
if (!isset($_POST['ex3'])){
	print_r("Error"); exit;
} else {
	$cntr=$_POST['ex3'];
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
<form action="" method="post">
	<h1>Hello! </h1>
	<?php
		print_r('Логин пользователя '.$_SESSION['task1']);
	?>
	<?php
		print_r('Имя пользователя '.$_SESSION['task2']);
	?>
	<?php
		print_r('Страна пользователя '.$cntr);
	?>
</body>
</html>

