<?php
//function hello($name, $age = 18){
//    $city = "Magnitogorsk";
//    echo "hello, $name! Age = $age. City = $city";
//}
//$name = "Tom";
//hello($name);


///** neeeext */
//function summ(&$a){
//    $a += 10;
//    echo $a;
//}
//$b = 15;
//echo $b . '<br>';
//summ($b);
//echo '<br>';
//echo $b;

///** next one */
//function summ ($a = 5){
//    echo $a . '<br>';
//
//}
//summ();
//echo '<br>';
//$b = 15;
//summ($b);

///** neeeext v masssive */
//function outHobby(...$args) {
//    // прверяем тип данных и значения аргумента
//    echo "<pre>";
//    var_dump($args);
//    echo "</pre>";
//
//    // выведем аргумент-массив в цикле
//    foreach ($args as $value){
//        echo "<li> $value </li>";
//    }
//}
//
//// вызов функции
//outHobby("PHP", "Программирование", "CSS", "Bitrics","HTML")

///** neeeext toje massive */
//function outHobby($arr) {
//    // проверяем тип данных и значения аргумента
//    echo "<pre>";
//    var_dump($arr);
//    echo "</pre>";
//
//    // выведем массив-аргумент в цикле
//    foreach ($arr as $key => $val) {
//        echo  "Увлечение " . ++$key . " - " . $val . "<br/>";
//    }
//};
//
//$hobby = ["PHP", "Программирование", "CSS", "Bitrics", "HTML"];
//
//// вызов функции
//outHobby($hobby);

///** next one RETURN */
//function summ($a){
//    $a +=10;
//    return $a;
//}
//$a = 15;
//$b = summ($a);
//echo $b;

/** vozvrashenie func */
//function getCircleArea($radius) {
//    // задаем константу числа пи
//    define("PI", 3.1415);
//    $result = PI * $radius * $radius;
//    // отдадим результат во внешнюю программу
//    return $result;
//}
//
//// вызов функции, вывод результата в браузер
//echo getCircleArea(5);
///** cho eto */
//function add($a, $b)
//{
//    $sum = $a + $b;
//    // есть оператор echo, но нет return
//    echo "Сумма = $sum <br />";
//}
//
//// вызываем функцию, в которой нет return
//$result = add(5, 6);
//
//// проверяем, что возвращает такая функция
//if($result === null)
//    echo "result равен Null";
//else
//    echo "result не равен Null"

///** REQURSIYA */
//function fun($i)
//{
//    if ($i <= 5) {
//
////        echo $i . '<br>';
//        fun($i + 1);
//        echo $i . '<br>';
//    }
//}
//fun(1);
///** task1 */
//
//function diff(){
//    $a= mt_rand(1,99);
//    echo $a, '<br>';
//    $b= mt_rand(1,99);
//    echo $b, '<br>';
//    if ($a > $b){
//        $res = $a;
//        return $res;
//    }
//    else{
//        $res = $b;
//        return $res;
//    }
//}
//echo "Наибольшее число = " . diff();
///** task2 */
//
//$a = 10;
//$b = 12;
//function Piff($a, $b){
//    $gip = sqrt($a * $a + $b * $b);
//    return $gip;
//}
//echo "Значение гипотенузы прямоугольного треугольника" . round(Piff($a,$b),3);
///** task3 */
//$a1 = 10;
//function MaxVal($a1){
//    while ($a1 < 1000000){
//        $a1 *= 10;
//        }
//    return $a1;
//}
//echo "Вы достигли предела" . MaxVal($a1);

///** task 4 */
//$arr=[];
//function RanArr($arr){
//    for($k = 0; $k <12; $k++){
//        $arr []=rand(0,100);
//        $arr[$k];
//    }
//    return $arr;
//}
//echo "<pre>";
//print_r (RanArr($arr));
//echo "</pre>";



 ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
</head>
<body>

</body>
</html>