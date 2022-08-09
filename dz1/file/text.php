<?php
if (isset($_POST['submit']) and $_FILES){
    move_uploaded_file($_FILES['myfile']['tmp_name'], "imge/".$_FILES['myfile']['name']);
}
echo'<pre>';
print_r ($_FILES['myfile']);
echo'</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name">
        <input type="file" name="myfile">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
/*file_put_contents('text.txt', "Hello, world! I'm Name");*/
?>
<?php 
   /* if(!file_exists("test2")){
         mkdir("test2");
    }*/
?>
<?php 
$b = file_get_contents('text.txt'); 
$arr = explode(' ', $b);
echo $arr[0] . $arr[1];

?>