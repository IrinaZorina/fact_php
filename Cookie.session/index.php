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
    <title>Document</title>
</head>
<body>
<form action="">
    Введите имя <input type="text" name="val" value="<?php echo isset($_GET['val']) ? $_GET['val']: '' ?>">
    <input type="submit" onclick="hello.php">
</form>
<form action="hello.php">
    <button>Перейти</button>
</form>
</body>
</html>

