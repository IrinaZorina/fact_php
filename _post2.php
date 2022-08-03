
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	print_r("Логин - ".$_POST['login']);
?>

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


</body>
</html>