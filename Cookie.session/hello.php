<?php
session_start();
if (isset($_SESSION['name'])){
    $name=$_SESSION['name'];
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doc</title>
</head>
<body>
<h1>Welcome, <?php echo $name; ?></h1>
</body>
</html>
