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
       $arr=['1.png','2.gpg','3.png'];
       $rand_arr = array_rand($arr,1);
       print_r ($arr[$rand_arr]) ;

        ?>
    </div>
    <div class="dz1">
        <h2> Задание 2 </h2>
        <?php
       $arr=[];
       
       for($i = 0; $i <10; $i++){
        $arr []=rand(-100,100);
        echo $arr[$i] . '<br>';
        
       }
       $b = $arr[0];
       $a = 100;
       
           foreach($arr as $key=>$value){		
               if($value<$a && $value>0){
                   $a = $value;
                  
                  
               } 
               if($b > $value){
                   $b = $value;
                   
               } 
           }
           echo "Минимальное положительное значение массива<br>";
           echo $a."<br>";
           
           
           
           
           echo "Максимальное отрицательное значение массива <br>";
           echo $b."<br>";
          
        ?>
    </div>
    
</div>


</body>
</html>