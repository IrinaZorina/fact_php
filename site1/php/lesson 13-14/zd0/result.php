<?php
echo '<hr>';
echo "задача 0";
echo '<br>';
session_start();
$_SESSION['task3'] = $_POST['task3'];

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
<?php
echo '<pre>';
echo 'Введен ответ на задачу 1= ' . $_SESSION['task1'];
echo '</pre>';
echo '<pre>';
echo 'Введен ответ на задачу 2= ' . $_SESSION['task2'];
echo '</pre>';
echo '<pre>';
echo 'Введен ответ на задачу 3= ' . $_SESSION['task3'];
echo '</pre>';

$count = 0;
if ($_SESSION['task1'] == 2){
    $count ++;
}
if ($_SESSION['task2'] == 4){
    $count ++;
}
if ($_SESSION['task3'] == 6){
    $count ++;
}
echo '<pre>';
echo 'Количество правильных ответов ' . $count;
echo '</pre>';

?>
</form>
<a href="task1.php">Вернуться на task1</a>
</body>
</html>