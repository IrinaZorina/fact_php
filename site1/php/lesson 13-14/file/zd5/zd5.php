<?php
$path1 = "zd5_data_1.txt";
$path2 = "zd5_data_2.txt";
$path3 = "zd5_data_3.txt";

$open1 = fopen($path1, "r");// открываем файлы
$open2 = fopen($path2, "r");

$read1 = fread($open1, filesize($path1));// зачитывам, записывам в строку
$read2 = fread($open2, filesize($path2));

$read_arr1 = explode('.', $read1);// разбиваем предложния на элементы массива
$read_arr2 = explode('.', $read2);

$count_1 = count ($read_arr1);
$count_2 = count ($read_arr2);

if ($count_1 >= $count_2){
    $count = $count_1;

}else {
    $count = $count_2;
}
$intersection = array_intersect($read_arr1, $read_arr2);
echo "<pre>";
print_r($read_arr1);
print_r($read_arr2);

print_r($intersection);
echo "</pre>";

file_put_contents($path3, $intersection);


//$result = null;
//for ($i = 0; $i < $count; $i++){
//
//    if ($read_arr1[$i] == $read_arr2[$i] . "."){
//        $result[] = $read_arr1[$i] . ".";
//    }
//    if ($read_arr1[$i] != $read_arr2[$i] . "."){
//        $result[] = $read_arr1[$i] . ".";
//        $result[] = $read_arr2[$i] . ".";
//    }
//
//}
//echo "<pre>";
//print_r ($result);// для проверки


//$result_str = implode($result);

//echo $result_str;// для проверки

//file_put_contents($path3, $result_str);
