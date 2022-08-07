<?php
echo '<hr>';
echo "задача 4";
echo '<br>';
session_start();
if (isset( $_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
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
<form action="" method="post">
    <p>Введите имя</p>
    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''  ?>">
    <input type="submit">
</form>
</body>
</html>
