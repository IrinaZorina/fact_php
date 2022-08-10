<?php
//


if (isset($_FILES)) {

    echo "<pre>";
    print_r($_FILES["file"]);
    echo "</pre>";

    $current_path = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $new_path = 'img/' . "fact.php.jpg";
    if (move_uploaded_file($current_path, $new_path)){
        echo 'Файл успешно загружен';
    }else{
        echo 'Что-то пошло не так';
    }

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
<form action=""  method="post"  enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit">

</form>
</body>
</html>