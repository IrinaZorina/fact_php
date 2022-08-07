<?php
//задача 4
//Создайте форму генерации ссылки с параметром:
//Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
//При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.

echo '<hr>';
echo "задача 4";
echo '<br>';
?>
<?php
if (isset($_POST["list"])){
    $lb = $_POST["list"];
    echo $lb;
}

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
     <form action="" method="post">
         <p>Логин
             <br>
             <select name="list">
                 <option  value="Лаб1">
                     Лаб1
                 </option>
                 <option value="Лаб2">
                     Лаб2
                 </option>
                 <option value="Лаб3">
                     Лаб3
                 </option>
                 <option value="Лаб4">
                     Лаб4
                 </option>
             </select>
         <p>
         <input type="submit">
         </p>
         <p>
         <a href="phpcourse.php?l=<?php echo $lb; ?>">ссылка</a>
         </p>

</form>

</body>
</html>