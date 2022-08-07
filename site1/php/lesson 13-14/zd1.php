<?php
echo '<hr>';
echo "задача 1";
echo '<br>';
if (isset($_GET['val'])) {
    $nameForm = $_GET['val'];
    setcookie('user', $nameForm, time() + 360);
}
if (isset($_COOKIE['user'])){
    echo 'Hello User ' . $nameForm;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--<h1>Hello! You are on index</h1>-->
<form action="">
    <input type="text" name="val" value="<?php echo isset($_GET['val']) ? $_GET['val'] : ''?>">
    <input type="submit">
</form>

</body>
</html>