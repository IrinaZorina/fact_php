<?php 
$b = file_get_contents('text.txt'); 
$arr = explode(' ', $b);
echo $arr[3].$arr[4];
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
<!--    <input type="hidden" name="MAX_FILE_SIZE" value="150000">-->
    <input type="file" name="myfile">
    <input type="submit" name="submit">
</form>
</body>
</html>