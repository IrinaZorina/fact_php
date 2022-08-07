
<?php
//задача 1
//Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей,
//группы переключателей. Выведите на экран значения, которые ввел/выбрал пользователь.
echo '<hr>';
echo "задача 1";
echo '<br>';
?>
<?php
print_r($_GET);
echo "<br>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form action="" method="get">
    <p>
        <textarea name="comments">Ваш комментарий</textarea>
    </p>
    <p>
    <input type="text" name="name"> Ведите текст
    </p>
    <p>
    <input type="radio" name="radio1">1
    </p>
    <p>
    <input type="radio" name="radio1">2
    </p>
    <p>
    <input type="radio" name="radio1">3
    </p>
    <p>
    <input type="checkbox" name="checkbox1" value="11">11
    </p>
    <p>
    <input type="checkbox" name="checkbox2" value="">22
    </p>
    <p>
    <input type="checkbox" name="checkbox3 value="33"">33
    </p>
         <p>
         <input type="submit">
         </p>
</form>

</body>
</html>