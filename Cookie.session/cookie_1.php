<?php
session_start();
if (isset($_GET['val'])){
    $_SESSION['name']=$_GET['val'];
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
<form action="">
    <label>Введите Имя</label>
    <input type="text" name="val" value="<?php echo isset($_GET['val']) ? $_GET['val']: '' ?>">
    <input type="submit"  value="Внести имя">
</form>
<form action="hello_cookie_1.php">
    <button>Проверить</button>
</form>
</body>
</html>