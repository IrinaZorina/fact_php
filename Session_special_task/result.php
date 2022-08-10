<?php
session_start();
if (!isset($_POST['ex3'])){
    print_r("Error"); exit;
} else {
    $task3=$_POST['ex3'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doc</title>
    <link rel="stylesheet" href="../post_tasks/result_styles.css">
</head>
<body>
<div class="border">
    <h1 class="h1_text">Ответы на задачи </h1>
    <?php
    //    print_r('Логин пользователя : '.$_SESSION['task1']);
    //    echo '<br>';
    echo "Вопрос 1: " . 'Ответ :' . $_SESSION['task1']; if($_SESSION['task1'] == 2){echo '<text style="color:limegreen">  Верно</text>';
    }else echo '<text style="color:red"> Не верно</text>';
    echo '<br>';
    ?>
    <?php
    //    print_r('Имя пользователя : '.$_SESSION['task2']);
    echo "Вопрос 2: " . 'Ответ :' . $_SESSION['task2']; if ($_SESSION['task2'] == 'Москва'){echo '<text style="color:limegreen">  Верно</text>';
    }else echo '<text style="color:red"> Не верно</text>';
    echo '<br>';
    ?>
    <?php
    echo "Вопрос 3: " . 'Ответ :' . $task3; if ($task3 == 'Путин'){echo '<text style="color:limegreen">  Верно</text>';
    }else echo '<text style="color:red"> Не верно</text>';
    echo '<br>';
    ?>
</div>

</body>
</html>