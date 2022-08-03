<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<label>Регистрация</label>
  <form action="reg2.php" method="post">
  <div>
    login <input name="login" id="login">
  </div>
  <div>
    password <input name="password" id="password">
  </div>
  <div>
    <button>SEND</button>
  </div>
</form>
<br>
<br>
<br>
<label>Авторизация</label>
<form action="auth2.php" method="post">
	<div>
		login <input type="text" name="login" id="login"><br>
	</div>
	<div>
		password <input type="text" name="password" id="password"><br>
	</div>
	<div>
		<button type="submit">SEND</button>
	</div>
</form>
  
</body>
</html>