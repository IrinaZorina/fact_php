<?php
$nameForm=$_GET['val'];
setcookie('name', $nameForm, time()+3600*24*7);
/**setcookie('age', 10, time()+3600*24*7);**/
print_r($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <h1>Привет</h1>
        <input type="text" name="val">
        <input type="submit" >
    </form>
</body>
</html>
