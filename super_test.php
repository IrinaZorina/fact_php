<!DOCTYPE html>
<html>
<body>
<?php
///** 5task */
//$arr=[];
//$sarr = [];
//$sum=[];
//function Tas4($arr){
//    $sum=0;
//    $a = mt_rand(2, 10);
//    for($i = 0; $i <$a; $i++){
//        $arr [$i]=rand(0,100);
//        $sum+=$arr[$i];
//    }
//    $sarr=$sum/$a;
//    return $sarr;
//
//}
//print_r (Tas4($sarr));

///** 6 task */

//function CountVar(){
//    $a = "very important information for you, user";
//    $count = str_word_count($a);
//    return $count;
//}
//echo "Слов в строке - " . CountVar();

///** 7 task */
//function Fibonacci($i){
//    if ($i == 0) return 0;
//    if ($i == 1 || $i == 2) {
//        return 1;
//    }
//    else{
//        return Fibonacci($i - 1) + Fibonacci($i - 2);
//    }
//}
//for ($i = 0; $i <= 15; $i++){
//    echo Fibonacci($i) . '<br>';
//}
//

///** 8task */
//function ARR(){
//    $arr = [1,2,3,4,5];
//    foreach ($arr as $key => &$value){
//        $value = mt_rand(1, 15);
//    }
//    return $arr;
//}
//echo '<pre>';
//print_r(ARR());
//echo '</pre>';

///** 9 task */
//$a = null;
//function Countstr($a){
//    $str = "HTML, CSS, PHP, BITRIX";
//    $a = str_word_count($str);
//    return $a;
//}
//echo Countstr($a) . ' - слова в строке';

///** 10task */
//
//function Reverse(){
//    $str = 'HTML, CSS, PHP, BITRIX';
//    $b = strrev($str);
//    return $b;
//}
//
//echo Reverse();

///** 11task */
$str="HTML, CSS, PHP, BITRIX";
function lengthStr($str){
    echo strlen($str);
}
echo lengthStr($str) . " - Длина строки";

///** 12task */
//$str="HTML, CSS, PHP, BITRIX";
//function Anyletter ($str)
//{
//    $a = str_split($str);
//    $k = count($a);
//    $i = 0;
//    while ($i < $k) {
//        echo $a[$i] . '<br>';
//        $i++;
//    }
//}
//$str = str_replace(array(","),'',$str);
//$str = str_replace(array(" "),'',$str);
//Anyletter($str);
//?>

