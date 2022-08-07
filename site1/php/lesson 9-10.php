<?php
include_once '../inc/header.php';
$_COOKIE['page'] = 'lesson 9-10.php';
setcookie('page', $_COOKIE['page'], time() +3600*24*7 );
?>
<?php

//Задача 1
//Создать функцию, которая сравнивает два числа и возвращает наибольшее.

echo '<hr>';
echo "Задача 1";
echo '<br>';

function sravni($a, $b){
    if ($a>$b){
        return $a;
    }else{
        return $b;
    }
}

echo sravni(10, 5);
//echo $a;

//Задача 2
//Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника
echo '<hr>';
echo "Задача 2";
echo '<br>';

function pivagor($a, $b){
    $c = sqrt($a*$a + $b*$b);
    return $c;
}
$result = pivagor( 2, 2);
echo $result;
//Задача 3
//Создать функцию, которая принимает одно число (10).
//В функции создать цикл, который будет увеличивать число в 10 раз
//и выводить его на экран. Когда число будет больше 1 000 000, на экране
//должно появляться сообщение, что вы достигли предела.

echo '<hr>';
echo "Задача 3";
echo '<br>';

function name1($a){
    for ($i = 1; $i <=1000000; $i*=$a){
        echo $i ;
        echo '<br>';
    }

    echo "Вы достигли предела";
    return $i;
}



$result1 = name1(10);
echo $result1;
//Задача 4
//Создать функцию, в которой объявляется массив и случайными элементами.

echo '<hr>';
echo "Задача 4";
echo '<br>';

function random_array($a){
    for ($i = 0; $i <10; $i++) {
        $arr4[$i] = mt_rand(0, $a);
    }
    return $arr4;
}
$arr = random_array(25);
echo '<pre>';
print_r($arr);
echo '</pre>';
//Задача 5
//Создать функцию, которая принимает массив и возвращает
//среднеарифметическое значение массива.

echo '<hr>';
echo "Задача 5";
echo '<br>';

function arr_sum($arr){
    $sum = 0;
    foreach ($arr as $value) {

        $sum = ($sum + $value)/2;
    }
    return $sum;
}

$summa = arr_sum([1, 2, 3, 4, 5]);
echo $summa;
//Задача 6
//Создать функцию, которая принимает строку.
//Вернуть количество слов с строке.
echo '<hr>';
echo "Задача 6";
echo '<br>';

$string = "Рандомный текст для заполнения тестовых сайтов и макетов";
//Функция подсчета слов
function count_word($string){
    $arr = explode(' ', $string);
    $count = count($arr);
    return $count;
}

echo count_word($string);

echo '<hr>';
echo "Задача 7";
echo '<br>';

//Задача 7
//Написать функцию, которая рассчитывает последовательность чисел Фибоначчи.


function fib($n)
{
    $fib = [0,1];
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}
echo "<pre>";
print_r(fib(20));
echo '</pre>';
//Задача 1
//Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.
echo '<hr>';
echo "Задача 1";
echo '<br>';

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function random($arr)
{
    $arr1 = [];
    $count = count($arr);
    for ($i=0; $i <= $count; $i++){
        $arr1[] = mt_rand(0, 10);
    }
    return $arr1;
}
$s = random($arr);
print_r($s);


//Задача 2
//Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая посчитает количество слов строке.
echo '<hr>';
echo "Задача 2";
echo '<br>';

$str = "HTML, CSS, PHP, BITRIX";

function count_word1($string){
    $arr = explode(', ', $string);
    $count = count($arr);
    return $count;
}

echo count_word1($str);

//Задача 3
//Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
//echo '<hr>';

//echo '<br>';
//
//$string = "HTML, CSS, PHP, BITRIX";
//function revers($str){
//
//    $arr1 = [];
//    $arr2 = [];
//    $len= mb_strlen($str);
//    $j =  $len;
//    $arr1 = explode(', ', $str);
//
//    for ($i=0; $i <= $len; $i++, $j--){
//        $arr2[$i] = $arr1[$j];
////        echo $arr1[$j];
//    }
//
//    $str1 = implode( ', ', $arr2);
//    return $str1;
//
//}
//
//echo revers($string);

//Задача 4
//Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет на экран длину строки.

echo '<hr>';
echo "Задача 4";
echo '<br>';

$string = "HTML, CSS, PHP, BITRIX";

function length_word($str){
    $len = mb_strlen($str);
    return $len;
}
echo length_word($string);
//Задача 5
//Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет каждую букву на новую строку

echo '<hr>';
echo "Задача 5";
echo '<br>';

$string = "HTML, CSS, PHP, BITRIX";

function view_str($str){
    $len = mb_strlen($str);
    for ($i=0; $i <= $len; $i++){
        $a = mb_substr($str, $i, 1);
        if ($a ==="," or $a === " "){
            continue;
        }else{
            echo  $a;
            echo '<br>';
        }
}
}
view_str($string);
?>

<?php
include_once '../inc/footer.php';
?>
