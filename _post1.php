
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
	print_r($_REQUEST)
?>
<form action="" method="post">
	<p>
		<label>Ввод текста</label><br>
		<input type="text" name="text"><br>
	</p>
	<p>
		<label>Многострочное поле</label><br>
		<textarea name="comments" rows='4'></textarea><br>
	</p>
	<p>
		<input type="checkbox" name="1">1<br>
		<input type="checkbox" name="2">2<br>
		<input type="checkbox" name="3">3<br>
	</p>
	</p>
		<p>
		<input type="radio" name="rad" value="1">1<br>
		<input type="radio" name="rad" value="2">2<br>
		<input type="radio" name="rad" value="3">3<br>
	</p>
	<p>
		<button type="submit">Send</button>
	</p>	
	</form>

</body>
</html>