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
$b = file_get_contents('1text.txt'); 
$arr1 = explode('.', $b,);
array_pop($arr1);
$a = file_get_contents('2text.txt'); 
$arr = explode('.', $a,);
array_pop($arr);
$res= array_diff($arr1,$arr);
$res2 = array_merge($arr,$res);
$res2= implode('.', $res2);
if(!file_exists("3text.txt")){
   file_put_contents('3text.txt',$res2);
}
$c = file_get_contents('3text.txt'); 

echo $c;

echo '<br>';


?>

</body>
</html>