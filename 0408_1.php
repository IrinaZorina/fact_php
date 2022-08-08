<?php 
	if (isset($_POST['submit']) and $_FILES){
    move_uploaded_file($_FILES['myfile']['tmp_name'], "img/".$_FILES['myfile']['name']);
}
echo '<pre>';
print_r($_FILES['myfile']);
echo '</pre>';
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
<form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
<!--    <input type="hidden" name="MAX_FILE_SIZE" value="150000">-->
    <input type="file" name="myfile">
    <input type="submit" name="submit">
</form>
</body>
</html>
<!-- if (isset($_POST['subm'])){
    $current_path = $_FILES['avatar']['tmp_name'];
    $filename = $_FILES['avatar']['name'];
    $new_path = DIR . '/img/' . $filename;
    if (move_uploaded_file($current_path, $new_path)){
        echo 'Файл успешно загружен';
    }else{
        echo 'Что-то пошло не так';
    }
} -->