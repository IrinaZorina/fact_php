<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$b = file_get_contents('1text.txt'). '.'; 
$arr1 = explode('.', $b);
array_pop($arr1);
$a = file_get_contents('2text.txt'). '.'; 
$arr = explode('.', $a);
array_pop($arr);
$res= array_intersect($arr1,$arr);
$res= implode('.', $res);


if(!file_exists("4text.txt")){
   file_put_contents('4text.txt',$res);
}
$c = file_get_contents('4text.txt'); 

echo '<br>';


?>
<h1> Задание 5 выполнено.</h1>
</body>
</html>