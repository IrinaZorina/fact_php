<?php
error_reporting(1);
if ($_POST['login']=='Задача1') {
    header("Location: task_1.php"); exit;
} elseif ($_POST['login']=='Задача2') {
    header("Location: task_2.php"); exit;
} elseif ($_POST['login']=='Задача3') {
    header("Location: task_3.php"); exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<form action="" method="post">
    <p>
    <h1>Здесь задания с 16 слайда(Задание 4)</h1>
        <label>
            Выберите задачу:
        </label>
        <select name="login">
            <option value="Задача1">task_1</option>
            <option value="Задача2">task_2</option>
            <option value="Задача3">task_3</option>
        </select>
    </p>
    <p>
        <button type="submit">go to page</button>
    </p>
    </p>
</form>

</body>
</html>