<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLO WORLD! WELCOME TO BITRIX DevOps</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>HEADER</h1>
    </header>

<?php
$self_string = "Информация о себе (хобби, место работы, место учебы и так далее). Место работы - безработный. Хобби - гидроциклы. Место учебы - FACT Академия. Какие языки программирования хотели бы еще изучить - Javascript. Какие инструменты хотели бы освоить - CMF 1C Bitrix и NODE JS";



$array_work = explode('.', $self_string);
echo "<pre>";
print_r($array_work);
echo "</pre>";
$array_changed = [];

foreach ($array_work as $item=>$value) {
    if ($item == 0) {
       $arr_item1 =  "<span style=\"color: red;\">$value</span>";
        echo $arr_item1;
    }
}

$testimonials = "Замечательный курс, позволяющий освоить азы программирования, понять как работают между собой скрипты и базы данных. А также узнать возможности работы функций. А также основные принципы ООП - полиморфизм, наследование, инкапсуляция.";

$testimonials_arr = explode(' ', $testimonials);
$testimonials_arr2 = [];

    foreach ($testimonials_arr as $key2 => $value2) {
        if (($key2 % 2 == 0)) {
            $key2 = "<span style=\"color: green; font-weight: bold;\">$value2</span>";
//            echo "<li>$key2</li>";

        } else  {
        $key2 = "<span style=\"color: red; font-weight: bold;\">$value2</span>";
//        echo "<li>$key2</li>";
    }

        array_push($testimonials_arr2, $key2);


    }





echo "<pre>";
print_r($testimonials_arr);
echo "</pre>";

echo "<pre>";
print_r($testimonials_arr2);
echo "</pre>";


$testimonials_string_colored = implode(' ', $testimonials_arr2);

//echo "<pre>";
//print_r($testimonials_string_colored);
//echo "</pre>";


?>
    
        
        <aside><p>ВАШЕ ФОТО</p></aside>
        <div id="fio"><p>ИМЯ И ФАМИЛИЕ</p></div>
        <div id="information"><p><?echo $arr_item1; ?>. Место работы - безработный. Хобби - гидроциклы. Место учебы - FACT Академия. Какие языки программирования хотели бы еще изучить - Javascript. Какие инструменты хотели бы освоить - CMF 1C Bitrix и NODE JS. </p></div>
        <div id="like"><p>Что понравилось на первых занятиях, что не понравилось.</p>
            <p>Замечательный курс, позволяющий освоить азы программирования, понять как работают между собой скрипты и базы данных. А также узнать возможности работы функций. А также основные принципы ООП - полиморфизм, наследование, инкапсуляция. </p>
            <p>А ЭТО ОКРАШЕННАЯ СТРОКА: <? echo $testimonials_string_colored; ?></p>
        </div>

  
    
    <footer>
        <p>ФУТЕР, МЕНЮ. </p>
    </footer>
    
</body>
</html>