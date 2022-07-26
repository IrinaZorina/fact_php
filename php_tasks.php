<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Styles/Styles.css">
    <title>Math_tasks</title>
</head>
<body>
<main>
    <div class="array_task">
        <h1> Задачи с циклами</h1>
    </div>
    <div class="math_all">
        <div class="task_1">
            <h3> Задание 2 </h3>
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
            echo "Понадобится $i шаг, для вычисления Pi с точностью до сотых $pi <br>";


            ?>
        </div>
        <div class="task_2">
            <h3> Задание 4</h3>
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
            echo "Понадобится $k шагов, чтобы сумма превысила заданное число S>10";
            ?>
        </div>
        <div class="task_3">
            <h3> Задание 3</h3>
            <?php

            $i = 0;
            $x = 1;
            $y = 1;
            $s = 0;
            while ($s <= 1) {
                $i++;
                $k = $x / $y;
                $s = $s + $k;
                $x = $x + 3;
                $y = $y + 1;
            }
            echo "Понадобится $i шагов чтобы сумма превысила заданное число S > 1";
            ?>
        </div>
        <div class="task_4">
            <h3>Задание 5</h3>
            <?php
            $i = 0;
            $a = 1;
            $b = 1;
            $s = 0;
            while ($s < 10) {
                $i++;
                $k = $a / $b;
                $s += $k;
                $a += 2;
                $b += 1;
            }
            echo "Понадобится $i шагов, чтобы сумма превысила заданное число S > 10";
            ?>
        </div>
    </div>
</main>
<section>
    <div class="array_task">
        <h1> Задачи с массивами</h1>
    </div>
    <div class="math_array">
        <div class="art_1">
            <?php
            $arr = [
                '1.png',
                '2.png',
                '3.png',
                '4.png',
                '5.png',
                '6.png',
                '7.png'
            ];
            $ran = array_rand($arr, 1);
            ?>
            <div class="arr_pic">
                <h3>Задание 3(из презентации)</h3>
                <img class="array_picture" src="images/<?php echo $ran; ?>.png" alt="random">
            </div>
        </div>
        <div class="art_2">
            <h3>Задание 1</h3>
            <?php
            $randomArray = [];
            $x = 0;

            while ($x < 15) {
                $x++;
                $randomArray[] = rand(-100, 100);
            }
            echo "<pre>";
            print_r($randomArray);
            echo "</pre>";
            $min = null;
            $max = null;
            foreach ($randomArray as $k => $randomNum) {

                if ($randomNum > 0) {
                    if (!$max) {
                        $max = $randomNum;
                    } else {
                        $max = ($randomNum < $max) ? $randomNum : $max;
                    }
                } else {
                    if (!$min) {
                        $min = $randomNum;
                    } else {
                        $min = ($randomNum < $min) ? $randomNum : $min;
                    }
                }
            }
            echo "<br>";
            echo "$max - Минимально-положительное число <br>";
            echo "$min - Максимально-отрицательное число <br>";

            ?>
        </div>
        <div class="art_3">
            <h3>Задание 2</h3>
            <?php
            $n = rand(1, 15);
            $arr = array();
            $s = 0;
            $c = 0;
            for ($i = 0; $i < $n; $i++) {
                $arr[$i] = rand(1, 100);
            }
            for ($k = 0; $k < count($arr); $k++){
                if ($arr[$k] % 2 == 0){
                $s += $arr[$k];
            }
                else $c++;
            }
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
            echo "<br>";
            echo "Сумма четных $s <br>";
            echo "количество нечетных $c <br>";
            ?>
        </div>
    </div>
</section>
<section>
        <div class="array_task">
            <h1> Задачи с функциями(19слайд)</h1>
        </div>
        <div class="function_tasks">
            <div class="ft_1">
                <h3>Задание 1</h3>
                <?php
                $str = "Возможно здесь какой-то текст и он очень важен, не для меня, конечно.";
                if (mb_strlen($str) > 5) {
                    $a = mb_substr($str, 5);
                    $a = str_replace(".", "...", $a);
                    echo $a;
                }
                if (mb_strlen($str) < 5) {
                    echo $str;
                }
                ?>
            </div>
            <div class="ft_1">
                <h3>Задание 2</h3>
                <?php
                $str = "Here again some text and maybe it is very important for me. I love cement btw.";
                $str = str_replace("a","1",$str);
                $str = str_replace("b","2",$str);
                $str = str_replace("c","3",$str);
                echo $str;
                ?>
            </div>
            <div class="ft_1">
                <h3>Задание 3</h3>
                <?php
                $str = "abc abc abc";
                $a = mb_strlen($str)-1;
                echo "Последняя b находится на $a месте";
                ?>
            </div>
            <div class="ft_1">
                <h3>Задание 4</h3>
                <?php
                $str = 'html css php';
                $a = explode(" ", $str);
                echo "<pre>";
                print_r($a);
                echo "</pre>";
                ?>
            </div>
            <div class="ft_1">
                <h3>Задание 5</h3>
                <?php
                $d1 = date_create("10-02-2015");
                $d2 = date_create("27-09-2021");
                $diff = date_diff($d1,$d2);
                echo "Разница между датами " . $diff->days . " дней";
                ?>
            </div>
            <div class="ft_1">
            </div>
        </div>
</section>
<section>
    <div class="array_task">
        <h1> Задачи с функциями(25.07)</h1>
    </div>
    <div class="Func_steps">

    </div>
</section>
</body>
</html>