<?php


function count_word($string, $count){
    $arr = explode(' ', $string);
    $count = count($arr);
}



$glas_name= counter_glas($name);

//
//echo $name = "<h1>Бикулов Руслан</h1>";
//
//$name_arr = explode(' ', $name);
//$count_name = count($name_arr);
//global $glas_name;
//$glas_name = counter_glas($name);


$count_name = count_word($name);
$glas_name =  counter_glas($name);