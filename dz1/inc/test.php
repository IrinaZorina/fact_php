<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\styles.css">
    <title>Циклы</title>
</head>

<body>
<div class="container5">
    <div class="dz1">
        <h2> Задание 1 </h2>
        <?php
        $a = 1;
        $b = 3;
        $i = 0;
        $pi = 0;
        while ($pi != 3.14) {
            if ($i % 2 != 0) {
                $a += 1 / $b;
            } else {
                $a -= 1 / $b;
            }
            $i++;
            $b += 2;
            $pi = 4 * $a;
            $pi = round($pi, 2);

        }
        echo " $i  <br>";



        ?>
    </div>
    <div class="dz1">
        <h2> Задание 2</h2>
        <?php
        $a = 1;
        $b = 1;
        $s = 0;
        $k = 0;
        while ($s < 10) {
            $k++;
            $plus = $a / $b;
            $s += $plus;
            if ($a == 1) {
                $a += 3;
            } else {
                $a += $b + 3;
            }
            $b *= 2;
        }
        echo  $k ;



        ?>
    </div>
    <div class="dz1">
        <h2> Задание 3</h2>
        <?php

         $i =0;
         $x = 1;
         $y = 1;
         $s = 0;
         while($s<=1){
            $i++;
            $k=$x/$y;
            $s=$s+$k;
            $x=$x+3;
            $y=$y+1;
         }
         echo  $i;
        ?>
    </div>
    <div class="dz1">
        <h2>Задание 4</h2>
        <?php
        $i = 0;
        $x = 1;
        $y = 1;
        $s = 0;
        while ($s < 10) {
            $i++;
            $k = $x / $y;
            $s += $k;
            $x = $x + 3;
            $y = $y + 1;
        }
        echo  $i ;
        ?>
    </div>
</div>


</body>
</html>