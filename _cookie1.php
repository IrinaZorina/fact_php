<?php
	setcookie('name', 'User' , time()+3600);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Doc</title>
</head>
<body>
	<h1>Hello,<?php echo $_COOKIE['name']; ?>! U r on index!</h1>
</body>
</html>
