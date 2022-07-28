<?php

//задание 1

echo '<hr>';
echo "задание 1";
echo '<br>';

for ($i = 1; $i <=30; $i++){
    if ($i%2 == 0){
        echo $i;
        echo '<br>';
    }
}

//задание 2

echo '<hr>';
echo "задание 2";
echo '<br>';

for ($i = 1; $i <=50; $i++){
    if ($i%3 == 0){
         echo "<i> $i </i>";
         echo '<br>';
    }
    if (($i%3 == 0) and ($i%5 == 0)){
        echo "<b> $i </b>";
        echo '<br>';
    }
}

//задание 3

echo '<hr>';
echo "задание 3";
echo '<br>';
////PI = 4(1-1/3 + 1/5 - 1/7 + 1/9 ...)

$pi = 0;
$i = 0;
$a = 1;
$b = 3;
$p = round( M_PI, 2);
//echo $p;

while ($pi != $p) {
    if ($i % 2 != 0) {
    $a+= 1/$b;
    }else{
        $a-= 1/$b;
    }
    $i++;
    $b +=2;
    $pi = round(4*$a, 2);
}
echo $i;


//задание 4

echo '<hr>';
echo "задание 4";
echo '<br>';


$a = 1;
$b = 1;
$i = 0;
$s = 0;
while ($s <= 10){
    $s = $s + $a/$b;
    $a +=3;
    $b +=1;
    $i +=1;
}
echo $i;

//домашнее задание

//задание 1
echo '<hr>';
echo "задание 1";
echo '<br>';

for ($i = 5; $i <=13; $i++){
        echo $i ;
        echo '<br>';
    }

//задание 2
echo '<hr>';
echo "задание 2";
echo '<br>';

$num = 1000;
$i = 0;
while ($num > 50){
    $num = $num/2;
    $i++;
}
echo $i;
echo '<hr>';

$num = 1000;
for ($i = 0; $num > 50; $i++){
    $num = $num/2;
}
echo $i;

//задание 3
echo '<hr>';
echo "задание 3";
echo '<br>';

$i = 3;
for ($b = 0; $b <= 10-$i; $b++){
    echo $b;

}