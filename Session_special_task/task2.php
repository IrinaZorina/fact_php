<?php
session_start();
if (isset($_POST['ex1'])){
    $_SESSION['task1']=$_POST['ex1'];}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doc</title>
</head>
<body>
<form action="task3.php" method="post">
    <h1>Ответьте на вопрос</h1>
    <p>
        <label>Столица России : </label><input type="text" name="ex2"><br>
    </p>
    <p>
        <button type="submit">Отправить</button>
    </p>
    </p>
</form>


</body>
</html>