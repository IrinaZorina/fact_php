<?php
include_once '../inc/header.php';
$_COOKIE['page'] = 'lesson 7-8.php';
setcookie('page', $_COOKIE['page'], time() +3600*24*7 );
?>
<p>PHP - Строки</p>
<p>Урок 7-8</p>
<br>
<?php
//задача из урока перед презентацией.
$a = 'hallo';

$arr2 = str_split($a);
$b = mb_substr($a, 0, 2);
$c = mb_substr($a, 2, 3);
$d = [$b, $c];
print_r($d);
echo '<br>';



//задача 1 стр 18
echo '<hr>';
echo "задача 1";
echo '<br>';
$a = 'fact';
echo str_replace('f', 'F', $a);
echo '<br>';



//задача 2 стр 18
echo '<hr>';
echo "задача 2";
echo '<br>';

$a1 = 'Закирова Регина Артуровна';

echo str_replace('Закирова Регина Артуровна', 'Регина Закирова', $a1);
echo '<br>';



//задача 3 стр 18
echo '<hr>';
echo "задача 3";
echo '<br>';

$a2 = 'Привет, мир';

$col = mb_strlen($a2);
echo  "колличество символов: " . $col;
echo '<br>';
$col_i = 0;
for ($i=0; $i <=$col; $i++) {
$str123 = mb_substr($a2, $i, 1);
//    $i++;
if (($str123 == 'и') OR ($str123 == 'И')) {
$col_i = $col_i + 1;
}
};
echo "колличество символов и: " . $col_i;



//задача 4 стр 18
echo '<hr>';
echo "задача 4";
echo '<br>';

$a4 = 'html css php';
echo mb_substr($a4, 0, 4);
echo '<br>';
echo mb_substr($a4, 5, 4);
echo '<br>';
echo mb_substr($a4, 9, 4);



//задача 5 стр 18
echo '<hr>';
echo "задача 5";
echo '<br>';

$a5 = 'html_css_php.png';

$b5 = strpos($a5, '.png');

if ($b5 !=0 ){
echo "да";
}else{
echo "нет";
}

//задача 1 стр 19
echo '<hr>';
echo "задача 1";
echo '<br>';

$a5_1 = 'html_css_php';
$b5_1 = mb_substr($a5_1, 0, 5 );
$b5_2 = strlen($a5_1);
if ($b5_2>5){
echo $b5_1 . '...';
}else{
echo $b5_1;
}

//задача 2 стр 19
echo '<hr>';
echo "задача 2";
echo '<br>';

//$a5_1 = 'abc_abc_abc';
//
//$z1 = str_replace('a', '1', $a5_1);
//$z2 = str_replace('b', '2', $z1);
//$z3 = str_replace('c', '3', $z2);
//echo $z3;


$a5_11 = 'abc abc abc';

$a5_11 = str_replace('a', '1', $a5_11);
$a5_11 = str_replace('b', '2', $a5_11);
$a5_11 = str_replace('c', '3', $a5_11);
echo $a5_11;


//задача 3 стр 19
echo '<hr>';
echo "задача 3";
echo '<br>';

$a6_1 = 'abc_abc_abc';
$str_len = strlen($a6_1 );
$st12 = 0;
for ($i = 0; $i < $str_len; $i++){
$st11 = strpos($a6_1, 'b', $i);
$st12 = "$st12 , " . "$st11";
}
$array10 = explode(' , ', $st12 );
echo max($array10);

//задача 4 стр 19
echo '<hr>';
echo "задача 4";
echo '<br>';


$a6_2 = 'html css php';

$array11 = explode(' ', $a6_2 );
print_r($array11);



//задача 5 стр 19
echo '<hr>';
echo "задача 5";
echo '<br>';

$a6_3 = '22-07-2022';
$a6_4 = '05-09-2019';
$array22 = explode('-', $a6_3);
$array33 = explode('-', $a6_4);


$day = $array22[0] - $array33[0];
$month = $array22[1] - $array33[1];
$year = $array22[2] - $array33[2];

$summ_day = ($day) + ($month * 31) + $year*365;
echo $summ_day . " дней";

?>
<main>

</main>
<?php
include_once '../inc/footer.php';
?>

