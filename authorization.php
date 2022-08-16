<?php
session_start();
error_reporting(1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Styles/authorization.css">
    <title>Authorization</title>
</head>
<body>
    <form action="connect.php" method="post">
        <label>Login</label>
        <input type="text" name="log" placeholder="Enter the login">
        <label>Password</label>
        <input type="password" name="pass" placeholder="Enter the password">

        <input class="Reg_button" type="submit" name="sub" value="Log in">
        <a class="Registration" href="registration.php">Registration</a>
        <a class="Back_to_page" href="index.php">Back to page</a>
            <?php
            if ($_SESSION['message']){
                echo '<p class="message">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);

        ?>
        </p>

    </form>
</body>
</html>