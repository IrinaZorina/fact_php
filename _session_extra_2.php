<?php
session_start();
print_r($_POST);
print_r($_SESSION);
if (isset($_POST['ex1'])){
$_SESSION['task1']=$_POST['ex1'];}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
<form action="_session_extra_3.php" method="post">
	<p>
		name <input type="text" name="ex2"><br>
	</p>
		<p>
		<button type="submit">SEND</button>
	</p>
	</p>
	</form>


</body>
</html>

