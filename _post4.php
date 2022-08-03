<?php 
		
		if ($_POST['login']=='Задача1') {
			 	header("Location: _post1.php"); exit;
			} elseif ($_POST['login']=='Задача2') {
				header("Location: _post2.php"); exit;
			} elseif ($_POST['login']=='Задача3') {
				header("Location: _post3.php"); exit;
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
			<option value="Задача1">Задача1</option>
			<option value="Задача2">Задача2</option>
			<option value="Задача3">Задача3</option>
		</select>
	</p>
	<p>
		<button type="submit">SEND</button>
	</p>
	</p>
	</form>

</body>
</html>