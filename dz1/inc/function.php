<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\styles.css">
    <title>Функции</title>
</head>

<body>
<div class="container5">
    
        <div class="dz1">
        <h2> Задание 2 Создать функцию, которая сравнивает два числа и возвращает наибольшее. 
 </h2>
        <?php
        $a = 0; 
        $b = 1;
      function sr($a,$b){
        $a= mt_rand(0,100);
        
        $b= mt_rand(0,100);
        
        if($a>$b){
           $c = $a;
            return $c;
        }
        else{
            $c = $b;
            return $c;
        }
        }
      
     echo sr($a,$b);

        ?>
        </div>
        <div class="dz1">
        <h2> Задание 3 Создать функцию, которая принимает длину двух катетов и возвращает значение гипотенузы прямоугольного треугольника.</h2>
        <?php
        $a =mt_rand(0,100);
        $b = mt_rand(0,100);
      function sr1($a,$b){
        
        $c = sqrt($a * $a + $b * $b);
      return $c;
        }
      
     echo round(sr1($a,$b),3);

        ?>
        </div>
        <div class="dz1">
        <h2> Задание 4 Создать функцию, которая принимает одно число (10). В функции создать цикл, который будет увеличивать число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, на экране должно появляться сообщение, что вы достигли предела.</h2>
        <?php
       $a =1;
       
      function sr2($a){
       
        
        while($a<1000000){
       $a*= 10; 
        }
       
        return $a;

      }
    
        echo "Мы достигли предела" . sr2($a);

        ?>
        </div>
        </div>
        <div class="dz1">
        <h2> Задание 5 Создать функцию, в которой объявляется массив и случайными элементами.</h2>
        <?php
       $arr=[];
       
      function sr3($arr){
        for($i = 0; $i <5; $i++){
          $arr []=rand(0,100);
          $arr[$i];
          
        
      }
      return $arr;
    }
     print_r (sr3($arr));
        ?>
        </div>
        <div class="dz1">
        <h2> Задание 6 Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива.</h2>
        <?php
       $arr=[];
       $sarr = [];
        $sum=[];
       
      function sr4($arr){
        for($i = 0; $i <5; $i++){
          $arr []=rand(0,100);
          $arr[$i];
          $sum=0;  
          $sum+=$arr[$i];
              
      }
      
      $sarr=$sum/5;
      return $sarr;
    }
     print_r (sr4($sarr));
     
        ?>
        </div>
        <div class="dz1">
        <h2>Создать функцию, которая принимает строку. Вернуть количество слов с строке. </h2>
        <?php
        function CountVar(){
    $a = "very important information for you, user";
    $count = str_word_count($a);
    return $count;
}
echo "Слов в строке - " . CountVar();
?>
    </div>
    <div class="dz1">
        <h2>Написать функцию, которая рассчитывает последовательность чисел Фибоначчи. </h2>
        <?php
        function Fib($i){
          if ($i == 0) return 0;
          if ($i == 1 || $i == 2) {
              return 1;
          }
          else{
              return Fib($i - 1) + Fib($i - 2);
          }
      }
      for ($i = 0; $i <= 15; $i++){
          echo Fib($i) . '<br>';
      }

?>
    </div>
    <div class="dz1">
        <h2>Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. 
 </h2>
 <?php
       function om(){
        $arr = [1,2,3,4,5];
        foreach ($arr as $key => &$value){
            $value = mt_rand(1, 100);
        }
        return $arr;
    }
   
    print_r(om($arr));
    

?>
    </div>
    <div class="dz1">
        <h2>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая посчитает количество слов строке.
</h2>
    <?php
    
    function strs($b){
      $str = 'HTML, CSS, PHP, BITRIX';
	  $b= str_word_count($str);
    return $b;
    }
    
    echo (strs($b));
?>
    </div>
    <div class="dz1">
        <h2>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »</h2>

    <?php 
    
     
    function strr($b){
      $str = 'HTML, CSS, PHP, BITRIX';
	  $b= strrev($str);
    return $b;
    }
    
    echo (strr($b));
     ?>
    </div>
    <div class="dz1">
        <h2>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет на экран длину строки.
</h2>

    <?php 
    
    $str = 'HTML, CSS, PHP, BITRIX';
    function strd($str){
     $b=$str;
	  $b= strlen($str);
    return $b;
    }
    
    echo (strd($str));
     ?>
    </div>
    <div class="dz1">
        <h2>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет каждую букву на новую
</h2>

    <?php 
    
    $str="HTML, CSS, PHP, BITRIX";
    function Anyletter ($str)
    {
        $a = str_split($str);
        $k = count($a);
        $i = 0;
        while ($i < $k) {
            echo $a[$i] . '<br>';
            $i++;
        }
    }
    $str = str_replace(array(","),'',$str);
    $str = str_replace(array(" "),'',$str);
    Anyletter($str);
    ?>
    </div>
</div>


</body>
</html>