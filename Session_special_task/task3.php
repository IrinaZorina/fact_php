<?php
session_start();
if (isset($_POST['ex2'])){
    $_SESSION['task2']=$_POST['ex2'];}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doc</title>
</head>
<body>
<form action="result.php" method="post">
    <h1>Ответьте на вопрос</h1>
    <p>
        <label>Фамилия президента России : </label><input type="text" name="ex3"><br>
    </p>
    <p>
        <button type="submit">Отправить</button>
    </p>
    </p>
</form>


</body>
</html>