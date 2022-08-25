<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ПЕРВЫЙ УРОК PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<header>
    <h1>ВЫПОЛНЕНИЕ ЗАДАНИЙ ПО PHP (1-4), со страницы 19, презентация урока 3-4  </h1>


</header>

<nav>
    <div class="nav_item"><a href="index.php">ГЛАВНАЯ</a></div>
    <div class="nav_item"><a href="about/about.php">ОБО МНЕ</a></div>
    <div class="nav_item"><a href="picture.php">КАРТИНКА (утро/ночь)</a></div>
    <div class="nav_item"><a href="tasks1-4.php">ЗАДАНИЕ (1-4)</a></div>
    <div class="nav_item"><a href="task-14072022.php">ДОП. ЗАДАНИЯ ПО PHP</a></div>
    <div class="nav_item"><a href="form.php">ФОРМА АВТОРИЗАЦИИ</a></div>
    <div class="nav_item">5</div>
</nav>

<body>

<section>

    <h1>ВЫВОД ГОДОВ, с 1980 по 2022 гг. </h1>
    <select name="" id="">
        <?php

        for ($i = 1980; $i<=2022; $i++) {
            echo "<option>$i</option>";
        }

        ?>
    </select>


</section>

<section>
    <h2>Задание №1 (урок 3-4, страница 19)</h2>

    <p>Дана последовательность элементов от 1 до 30. Необходимо вывести на экран числа, кратные 2. Каждое число должно быть с новой строки.
    </p>

    <?php
    $arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
    function count2($arr) {

        for ($j = 1; $j<=30; $j++) {
            if ($j%2==0) {
                echo "<br>$j</br>";
            }
        }

    };

    count2($arr);
    ?>
</section>


<section>
    <h2>Задание №2 (урок 3-4, страница 19)</h2>

    <p>Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3. Числа, одновременно кратные 3 и 5, сделать жирным.</p>
    <?php

    function italictype() {
        for ($k = 1; $k<=50; $k++) {

            if ($k%3 == 0 AND $k%5 == 0) {
                echo ".<strong>$k</strong>. <br>";
            } elseif ($k%3 == 0) {
                echo ".<i>$k</i>. <br>";
            }

        }
    }

    italictype();

    ?>

</section>


<section>
    <h2>ЗАДАНИЕ №4</h2>
<p>Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4,... Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10? </p>

    <?php

    function min_elem($a = 1, $b = 1) {
        $result = $a/$b;
        $summ=1;
        $count = 0;


        while ($summ < 10) {

            $a += 3;
            $b += 1;
            $result = $a / $b;
            $summ += $result;
            $count +=1;

            echo "Значение переменной а: $a. <br>";
            echo "Значение переменной b: $b. <br>";
            echo "Значение переменной result: $result. <br>";
            echo "Значение переменной summ (сумма) : $summ. <br>";
            echo "Значение счетчика count равно $count <br>";

            echo "===================================<br>";




        }

        echo "Чтобы сумма превысила заданное число S > 10, нужно сложить минимальное количество элементов,  $count <br>";
    }

    min_elem();




    ?>

</section>


<section>

    <h2>Задание №3</h2>

    <p>Число  Пи  вычисляется  по  формуле  Грегори  следующим образом:  РI=4(1-1/3+1/5-1/7+1/9-...), причем, чем больше слагаемых в скобках, тем выше точность вычисления числа Пи. Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01</p>




    <?php

    function count_pi($pi = 0, $i = 0, $a = 1, $b = 3) {
        //Надо нам в этом задании задать нашу вычисляемую переменную ПИ, с имеющейся по умолчанию в интерпретаторе $= вычисляемой как округление числа M_PI с количеством округления единиц до 2.
        $pi =0;
        $i = 0;
        $a = 1; //Числитель у нас всегда равен 1.
        $b = 3; //Задаем значение исходное знаменателя первого элемента в выражении
        $p = round(M_PI, 2);
        echo "Значение с округлением PI = ".$p."<br>";

        while ($pi != $p) {
            if($i%2 != 0) {
                $a += 1/$b;
            } else {
                $a -= 1/$b;
            }

            $i++;
            $b +=2;
            $pi = round(4*$a, 2);

        }

        echo "Минимальное количество слагаемых для вычисления нашего числа пи с точностью до 0,01 = ".$i;
//Все
        //Сделано окей.
    }
    count_pi();

    ?>

</section>

</body>
</html>
