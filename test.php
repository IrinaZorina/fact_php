<?php
//$arr1 = array('apple', 'pineapple', 'banana');
//print_r($arr1[2]);
//$arr2[] = 'tomato';
//$arr2[] = 'cucumber';
//print_r($arr2);
//$arr3 = ['apple', 'pineapple', 'banana'];
//echo $arr3[0] . '<br>';
//echo $arr3[1] . '<br>';
//echo $arr3[2] . '<br>';

//print_r($arr3[2]);
//$arr3 = ['apple','pineapple', 'banana'];
//$arr3[10] = 'pear';
//for ($i = 0; $i<4; $i++){
//    echo $arr3[$i] . '<br>';
//}
//$arr3[10] = 'pear';
//$arr3[] = 'mango';
//foreach ($arr3 as $value){
//    echo $value, '<br>';
//
//}
//echo count ($arr3);
//$count = count($arr3);
//
//for ($i = 0; $i<=$count-1; $i++){ //считает кол-во массивов
//    echo $arr3[$i] . '<br>';
//}
//
//		// определим переменную-массив из трех значений
//		// максимальный индекс - 2
//		$fav_movies = ["Собачье сердце", "Полет над гнездом кукушки", "Тот самый Мюнхгаузен"];
//
//		// добавим элемент в массив
//		$fav_movies[] = "Человек с бульвара Капуцинов";
//
//        $count = count($fav_movies);
//
//        $i=0;
//        while ($i < $count){
//        echo "-- " . $fav_movies[$i], "<br />";
//        $i++;
//    }
//
//		/*echo "<pre>";
//		print_r($fav_movies);*/
//$i = mt_rand(0, count($arr3)-1);
//echo $arr3[$i];

//$arr4 = array(
//  'hello' => 'привет',
//    'bye' => 'пока'
//);
//echo '<pre>';
//print_r($arr4);
//echo '</pre>';
//$arr5 = [
//    'apple' => 'яблоко',
//    'pineapple' => 'ананас',
//    'banana' => 'банан'
//];
//echo '<pre>';
//print_r($arr5['banana']);
//echo '</pre>';
//foreach ($arr5 as $key => $value){
//    echo $key . '<br>';
//}

//$arr6 = [
//    [10, 11, 12],
//    [20, 22],
//    [31, 32, 33,34]
//];
//echo '<pre>';
//print_r($arr6);
//echo '</pre>';




$arr7 = [
    'fruits' => ['apple' => 'яблоко', 'pineapple' => 'ананас', 'banana' => 'банан'],
    'vagetables' => ['tomato' => 'помидор', 'cucumber' => 'огурец'],
    'drinks' => ['water' => 'вода', 'coffee' => 'кофе', 'tea' => 'чай']
];
//echo '<pre>';
//print_r($arr7);
//echo '</pre>';
foreach ($arr7 as $key => $value){
    if ($key == 'fruits'){
    foreach ($value as $key_new => $item) {
        echo $item, '<br>';
    }
    }
}

// SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS

// можно инициализировать массив
// $user = array();
// $user = [];
//
//$user["name"] = "Татьяна";
//$user["surname"] = "M.";
//$user["age"] = 31;
//$user["email"] = "pretty-woman@gmail.com";
//$user["job"] = "Менеджер";
//$user["children"] = 1;

// так будет работать,
// только непонятно, зачем смешивать индексный и ассоциативный массивы
//		$user[1] = "г. Москва";
//		$user[] = "Драники";

// так работать не будет
//		echo "<h3>Hi, Miss $user['name'] $user['surname'], вот твои личные данные:</h3>";
//		echo "<pre>";
// print_r($user);


//		 а так будет
//		echo "<h3>Hi, Miss {$user['name']}  {$user['surname']}, вот твои личные данные:</h3>";
//		echo "<pre>";
//		print_r($user);


// так тоже будет
//		 echo "<h3>Hi, Miss $user[name] $user[surname], вот твои личные данные:</h3>";
//		 echo "<pre>";
//		 print_r($user);