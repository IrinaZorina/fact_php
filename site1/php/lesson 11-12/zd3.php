<?php
//задача 3
//Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару
//(login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.
echo '<hr>';
echo "задача 3";
echo '<br>';
?>
<?php
//print_r($_POST);// для проверки
//echo "<br>";
$login = null;
$pass = null;

if (isset($_POST['login']) and isset($_POST['password'])){
    $login = $_POST['login'];
    $pass = $_POST['password'];
}

if (($login == "user") and ($pass == "qwerty")){

    include_once 'zd3_secret.php';

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
             <select name="login">
                 <option  value="admin">
                     admin
                 </option>
                 <option value="user">
                     user
                 </option>
                 <option value="guest">
                     guest
                 </option>
             </select>
        <p>Пароль
            <br>
        <input type="password" name="password">
         </p>
         <p>
         <input type="submit">
         </p>

</form>

</body>
</html>