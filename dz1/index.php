<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Личная информация</title>
</head>
<body>

        
    <header class="header">
        <div class="container">     
            <div class="item-a">Главная</div>
            <div class="item-b"><a href="table.html">Таблица</a></div>
            <div class="item-f"><a href="inc/test.php">Циклы</a></div>
            <div class="item-y"><a href="inc/array.php">Массивы</a></div>
            <div class="item-p"><a href="inc/string.php">Строки</a></div>
        </div>
    </header>

<div class="container2">
    <div class="item-c">
        <img class="im2" src="img/u1.jpg">
    </div>

    <div class="item-e">
        <h1 class="nm">Владислав Федоров</h1>
    </div>

    <div class="item-d">
        <?php
        $str = 'Работаю на Магнитогорском<br>
        металлургическом комбинате 5 лет.<br>
         Увлечение хоккей.';
         
        $a=strpos(
        'Работаю на Магнитогорском<br>
        металлургическом комбинате 5 лет.<br>
         Увлечение хоккей.','.');
         $a++;
         
         $b= substr($str,$a);
         if(strlen($str)>$a){
            $c=substr($str, 0,$a);
            
            echo '<div style ="color: red">'. $c. '</div>' . '<div>' . $b . '</div>' ;
           
         }
         ?>
    </div>

    <div class="item-i">
        <?php
       
                $str = 'На первых занятиях все понравилось. Замечаний нет.';
                $x = null;
                $y = null;
                $a = explode(" ", $str);
                foreach ($a as $key => $value){
                    if (($key % 2) == 0){
                        $value = '<span style ="color: blue">' . $value ." " . '</span>';
                            echo $value;
                    }
                    else{
                        $value = '<span style ="color: teal">' . $value ." ". '</span>';
                            echo $value;
                    }
                }

                ?>
        
        
    </div>

    <div class="image">
   
    </div>
 </div>

<div class="container3">
    <div class="item-q">
        <img class="im3" src="img/1.png"><h3>Миньён 1</h3>
    </div>
    <div class="item-w"><img class="im3" src="img/2.png"> <h3>Миньён 2</h3></div>
    <div class="item-r"><img class="im3" src="img/3.png"><h3>Миньён 3</h3></div>
    <div class="item-t"><img class="im3" src="img/4.png"><h3>Миньён 4</h3></div>
    


</div>
<div class="container4">
    <div class="item-qq">
        <img class="im3" src="img/1.png"><h3>Миньён 1</h3>
    </div>
    <div class="item-ww"><img class="im3" src="img/2.png"> <h3>Миньён 2</h3></div>
    <div class="item-rr"><img class="im3" src="img/3.png"><h3>Миньён 3</h3></div>
    <div class="item-tt"><img class="im3" src="img/4.png"><h3>Миньён 4</h3></div>
    


</div>
<footer>
<span style ="color: aliceblue">Copyright Федоров Владислав</span>
  <?php

function pageCount ($page){
  $str = file_get_contents('index.php');
  $strVowel = file_get_contents('index.php');
  $str = preg_replace("/[a-zA-Z]/i", "", $str);
  $str = str_replace(array('-'), '', $str);
  $str = str_replace(array("'"), '', $str);
  $tempWords = str_word_count($str, 1, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
  $strVowel = str_replace(array("с"), '', $strVowel);
  $countVowel = preg_replace("/[аяуюоеёэиыАЯУЮОЕЁЭИЫ]/i", "", $strVowel);
  $count = mb_strlen($strVowel) - mb_strlen($countVowel);
  
  echo "<br>";
  echo '<span style ="color: aliceblue">' . $count . " гласных на сайте" . '</span>';
  echo "<br>";
  echo '<span style ="color: aliceblue">' . count($tempWords) . " слов на сайте". '</span>';
  echo "<br>";
  }
  pageCount ('index.php')?>
  </footer>
  

</body>

</html>