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
       <?php
      
      echo ucfirst('fact');
    ?>
    </div>
    <div class="dz1">
       <?php
      
      echo substr('Закирова Регина Артуровна', 17, 13);
      echo substr('Закирова Регина Артуровна', 0, 17);
    ?>
    </div>
    <div class="dz1">
       <?php
      $arr = ["Привет","мир"]; 
      $i = 0;

      foreach ($arr as $elem) { 
        if (strpos($elem, 'и') !== false) { 
           $i++; 
            } 
            }
            echo $i;
      
    ?>
    </div>
    <div class="dz1">
       <?php
      
    echo substr('html css php', 0, 4); 
    echo '<br>';
    echo substr('html css php', 5, 3);
    echo '<br>';
    echo substr('html css php', 9, 3);
    ?>
    </div>
    <div class="dz1">
       <?php
      
      $a = "text.png";
      $c = substr($a,-4);
      $b = ".png";
      if (strpos($c, $b) !== false){
          echo "Да";
      }else{
          echo "Нет";
      }
    ?>
    </div>
    <div class="dz1">
       <?php
      
      $str ='sdgsgsd';
      if(strlen($str)>5){
        echo substr($str, 0, 5). '...';

      }
      else{
        echo $str;
      }

    ?>
    </div>
    <div class="dz1">
       <?php
      
      $str ='sdaaccaagccccsgsbccbbd';
      echo strtr($str,['a'=>1, 'b'=>2, 'c'=>3]);
      

    ?>
    </div>
    <div class="dz1">
       <?php
      
      echo strrpos('abc abc abc', 'b');
      

    ?>
    </div>
    <div class="dz1">
       <?php
      
      $arr = explode(' ', 'html css php');
      print_r($arr);
      

    ?>
    </div>
    <div class="dz1">
       <?php
      
      $date1 = DateTime::createFromFormat("d-m-Y",'10-02-2012');
      $date2 = DateTime::createFromFormat("d-m-Y",'15-02-2018');
      $interval = $date1->diff($date2);
      if($interval->y<=4){
      echo $interval->y, "-Года","\n";
    }
    else{
        echo $interval->y, "-Лет","\n";

    }
      echo $interval->d, "-Дней";

      

    ?>
    </div>
</div>



</body>
</html>
$