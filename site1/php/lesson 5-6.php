<?php
include_once '../inc/header.php';
$_COOKIE['page'] = 'lesson 5-6.php';
setcookie('page', $_COOKIE['page'], time() +3600*24*7 );
?>
<p>PHP - Массивы</p>
<p>Урок 5-6</p>
<?php

//$arr1 = array('яблоко', 'ананас', 'банан');
//print_r($arr1);
//foreach ($arr1 as $value){
//    echo $value . '<br>';
//}
//echo  count($arr1);

//$arr4 = array(
//        'hello' => 'привет',
//         'bay' => 'пока'
//);
//echo '<pre>';
//print_r($arr4);
//foreach ($arr4 as $key => $value){
//    echo $key . '<br>';
//    print_r($arr4['bay']);
//}
//$user= [];
//
//$user["name"] = "Татьяна";
//$user["surename"] = "М";
//$user["age"] = 31;
//$user["email"] = "pretty-wooman@mail.ru";
//$user["job"] = "Менеджер";
//$user["children"] = 1;
//
////print_r($user['name']);
//
//echo "Hi Miss {$user['name']} {$user['surename']}, вот твои личные данные:";
//echo '<pre>';
//print_r($user);

//$arr7 = [
//    'fruit' => ['apple' => 'яблоко', 'pineapple' => 'ананас', 'banana' => 'банан'],
//    'vagetables'=> ['tomato'=> 'помидор', 'cucumber'=> 'огурец'],
//    'drinks'=> ['water' => 'вода' , 'cofee'=> 'кофе', 'tea' =>'чай']
//];
//$key = 'fruit';
//foreach ($arr7 as $key => $value){
//    if ( $key == 'vagetables'){
////    foreach ($value as $key_new => $item){
//    foreach ($value as $key_new => $item){
//        echo $item . '<br>';
//    }
//}
//}
$country = [
    ["name" => "Китай", "capital" => "Пекин", "pupulation" => "1.40" ],
    ["name" => "Индия", "capital" => "Нью-Дели", "pupulation" => "1.37" ],
    ["name" => "США", "capital" => "Вашингтон", "pupulation" => "0.32" ],
    ["name" => "Индонезия", "capital" => "Джакарта", "pupulation" => "0.24" ]

];
//$i=0;
//foreach ($country as $key => $value[4]) {
//    if ($i <= 4) {
//        foreach ($value as $key_new => $item) {
//            echo
//            "Страна: {$country[$i]["name"]},
//Столица: {$country[$i]["capital"]},
//Население: {$country[$i]["pupulation"]} (млрд. чел.)<p>";
////        $i += 1;
//        }
//
//    }
//}

$i=0;
foreach ($country as $key => $value) {
    echo
    "Страна: {$country[$key]["name"]},
        Столица: {$country[$key]["capital"]},
        Население: {$country[$key]["pupulation"]} (млрд. чел.)<p>";


}
//Задача 1 стр 13
echo '<hr>';
echo 'Задача 1';
echo '<br>';

$i=0;
$result = 0;
$arr3 = [50,45,40,35,30];
foreach ($arr3 as $value){
    $result =$result + $arr3[$i];
    $i++;
}
echo $result;

//Задача 2
echo '<hr>';
echo 'Задача 2';
echo '<br>';
$arr4 = [];
//$a = mt_rand(0, 10);
for ($i = 0; $i <10; $i++) {
    $arr4[$i] = mt_rand(0, 9);

}
echo '<pre>';
print_r($arr4);
echo '</pre>';
$inv = 0;
for ($u = 9; $u > 0; $u--) {
   $inv = "$inv" . " , " . "$arr4[$u]";
}
$inv1 = explode(' , ' , $inv);
echo '<pre>';
print_r($inv1);
echo '</pre>';
//Задача 3
echo '<hr>';
echo 'Задача 3';
echo '<br>';

$arr5[] = "1.png";
$arr5[] = "3.png";
$arr5[] = "5.png";
$arr5[] = "6.png";
$arr5[] = "2.png";
$arr5[] = "9.png";
$arr5[] = "10.png";
$arr5[] = "8.png";
$arr5[] = "7.png";
$arr5[] = "4.png";


$i = mt_rand(1,9);

echo $arr5[$i];
//print_r($arr5);

//Задача 4
echo '<hr>';
echo 'Задача 4';
echo '<br>';

$n = mt_rand(1,10);


for ($i = 0; $i <$n; $i++){
    $j = mt_rand(-100,100);
    $arr6[] = $j;
}
echo '<pre>';
print_r($arr6);
echo '</pre>';
//echo min($arr6);

$min = null;
//$min_key = null;
$max = null;
//$max_key = null;

foreach($arr6 as $key1 => $value1) {
    if (($value1 > $max or $max === null) and ($value1 < 0)) {
        $max = $value1;
//        $max_key = $key1;
    }
}

    foreach($arr6 as $key1 => $value1)
    if(($value1 < $min or $min === null) and ($value1 > 0))
    {
        $min = $value1;
//        $min_key = $k;
    }

    echo "Максимальное отрицательное число: " . $max;
    echo '<br>';
    echo "Минимальное положиельное число: " . $min;

//Задача 1 стр 14
echo '<hr>';
echo 'Задача 1';
echo '<br>';
//$arr7 = [];
//$n1 = 25;// количество учеников
//$c = 3;// количество предметов
//for ($i = 0; $i <$n; $i++){
//    $j1 = mt_rand(2,5);// генератор оценок
//    $arr7[$c-1] = $j1;
//    $c++;
//}

$arr8 = [
    'physics' => [5, 4, 3, 2, 3, 4, 5, 4, 2, 5],
    'chemistry'=> [4, 5, 3, 3, 3, 4, 5, 4, 3, 4],
    'informatics'=> [3, 4, 3, 5, 3, 4, 2, 4, 3, 3]
];
$n = 10; //колличество учеников
$phy = 0;
$che = 0;
$inf = 0;
// через цикл не получилось
//foreach ($arr8 as $key2 => $value2) {
//    if ($key2 == 'physics') {
//        $phy += $value2;// не получается сложить, так как выходит ошибка, что складываем массив с int числом.
//   }if ($key == 'chemistry') {
//        $che = $che + $value;
//    }if ($key == 'informatics') {
//        $inf = $inf + $value;
//    }
//}
$phy = (array_sum($arr8["physics"]))/10;
$che = (array_sum($arr8["chemistry"]))/10;
$inf = (array_sum($arr8["informatics"]))/10;

echo "Средняя оценка по Физике: " . $phy . '<br>';
echo "Средняя оценка по Химии: " . $che . '<br>';
echo "Средняя оценка по Информатике: " . $inf . '<br>';

//Задача 2 стр 14
echo '<hr>';
echo 'Задача 2';
echo '<br>';
$arr9 =[
    'Cuba' => ['January' => '20', 'February' => '21', 'March' => '22', 'Apri' => '23', 'May' => '24', 'June' => '25',
                        'July' => '26', 'August' => '29', 'September' => '26', 'November' => '25', 'December' => '24'],

    'Trinidad' => ['January' => '21', 'February' => '22', 'March' => '22', 'Apri' => '23', 'May' => '24', 'June' => '25',
                        'July' => '26', 'August' => '27', 'September' => '26', 'November' => '25', 'December' => '24'],

    'Jamaika' => ['January' => '20', 'February' => '25', 'March' => '23', 'Apri' => '23', 'May' => '24', 'June' => '25',
                        'July' => '26', 'August' => '27', 'September' => '26', 'November' => '25', 'December' => '23'],

    'Gaiti' => ['January' => '20', 'February' => '21', 'March' => '22', 'Apri' => '23', 'May' => '24', 'June' => '25',
                        'July' => '26', 'August' => '28', 'September' => '28', 'November' => '27', 'December' => '24']
];

$max0 = null;
foreach ($arr9 as $key => $value){// нашли максимум температур
    $max1 = max($arr9[$key]);
    $month[] = $key;
    foreach ($value as $key_new => $value_new){
        if ($value_new == $max1){
            $arr10[$key][$key_new] = $max1;
        }
    }
}

print_r($arr10);

//Задача 3 стр 14
//Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов.
echo '<hr>';
echo 'Задача 3 ';
echo '<br>';
$arr11 =[
    [1, 2, 3, 4, 5, 6],
    [6, 2, 0, 4, 9, 4],
    [1, 3, 5, 7, 9, 0],
    [2, 4, 0, 4, 5, 4],
    [1, 2, 0, 1, 5, 4]
];
$max = -1;
$temp = [];//новый массив для максим элементов
$pr = 1;
$c = 0;//счетчик для нового массива
for ($j=0; $j<6; $j++){
    if ($j % 2 == 0){
        for ($i=0; $i<5; $i++){
            if ($arr11[$i][$j] >$max){
                $max = $arr11[$i][$j];
                //проверяешь элемент массива
                //переменной max присваиваешь значение
                $temp[$c] = $max;//формируешь массив максимальных элементов
            }
        }
        $c += 1;
        //увеличиваешь счетчик нового массива на 1
    }
    $max = 0;
    // обнуляешь переменную max
}
print_r($temp);

for ($i=0; $i <3; $i++ ){
    $pr = $temp[$i] * $pr;

}
echo 'Произведение равно: ' . $pr;

//Задание 4 стр 15
//Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А.
echo '<hr>';
echo 'Задание 4';
echo '<br>';

$arr13 =[
    ['aa', 'ab', 'cc', 'dd', 'ff'],
    ['vc', 'bc', 'sd', 'fd', 'ss'],
    ['ss', 'ff', 'sa', 'ad', 'fd']

];
foreach ($arr13 as $value){
    foreach ($value as $item) {
        $search = strpos($item, 'a');
        if ($search === 0){
            echo  "<pre>";
            echo $item;
            echo  "</pre>";
        }
    }
}













?>

<?php
include_once '../inc/footer.php';
?>
