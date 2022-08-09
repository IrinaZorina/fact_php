<?php 
session_start();
$_SESSION['name'][] = $_SERVER['PHP_SELF']; 
if(isset($_POST[name])) { 
     $_SESSION[name]=strip_tags(trim($_POST[name]));
     }
     ?>
     
     <form action="task3.php" method="post"><br> <br>
     <input type="text" name="Fname"> <br><br>
     <input type="submit" value="дальше">
     </form>
     