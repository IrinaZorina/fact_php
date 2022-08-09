<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Личная информация</title>
</head>

<body>
<h1>Передача аргументов переменной длины</h1>
	<h2>Мои увлечения</h2>	
	<?php
		/*// при определении функции говорим, что
		// количество аргументов заранее неизвестно 
		function outHobby(...$args) {
			// прверяем тип данных и значения аргумента
			echo "<pre>";
			var_dump($args);
			echo "</pre>";
			
			// выведем аргумент-массив в цикле 
			foreach ($args as $value){
				echo "<li> $value </li>";
			}
		};
	
		// вызов функции
		outHobby("PHP", "Программирование", "CSS", "Bitrics");*/
	
/*function sum($a){
    $a+=10;
    return $a;

}
$a= 15;
$b= sum($a);
echo $b;*/
    ?>
    <?php
	/*// определение функции
	function getCircleArea($radius) {
		// задаем константу числа пи
		define("PI", 3.1415);
		$result = PI * $radius * $radius;
		// отдадим результат во внешнюю программу
		return $result;
	}
	
	// вызов функции, вывод результата в браузер
	echo getCircleArea(5);*/
	?>
    <?php
		print_r($_GET);
	?>