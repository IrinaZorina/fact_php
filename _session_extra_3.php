<?php
session_start();
print_r($_POST);
print_r($_SESSION);
if (isset($_POST['ex2'])){
$_SESSION['task2']=$_POST['ex2'];}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
<form action="_session_extra_res.php" method="post">
	<p>
		country <input type="text" name="ex3"><br>
	</p>
		<p>
		<button type="submit">SEND</button>
	</p>
	</p>
	</form>


</body>
</html>

