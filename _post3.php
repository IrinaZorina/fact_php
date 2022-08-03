<?php 
		
		if($_POST['password']=='123' && $_POST['login']=='Admin') {
			 header("Location: _post3-hello.php"); exit;
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
		<label>
			Выберите логин:
		</label>
		<select name="login">
			<option value="Admin">Admin</option>
			<option value="User">User</option>
			<option value="Guest">Guest</option>
		</select>
	</p>
	<p>
		password <input type="text" name="password"><br>
	</p>
		<p>
		<button type="submit">SEND</button>
	</p>
	</p>
	</form>

</body>
</html>