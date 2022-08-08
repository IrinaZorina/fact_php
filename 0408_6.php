<?php 
$a = file_get_contents('Текст1.txt'); 
$b = file_get_contents('Текст2.txt'); 
$arr=[];
$j=0;
$arr1 = explode('.', $a);
$arr2 = explode('.', $b);

function textToArray($array,$arrr){
    for($i=0;$i<count($array); $i++){
         if (!in_array($array[$i], $arrr) and $array[$i]!=""){
            array_push($arrr, $array[$i]);
            $j++;        
        }
    }
    return $arrr;
}
$arr=textToArray($arr1,$arr);
$arr=textToArray($arr2,$arr);
$txt=implode(".", $arr);
$txt=$txt.".";
file_put_contents('Task4.txt'.".", $txt);
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
<h1> Задание 4 выполнено.</h1>
</body>
</html>