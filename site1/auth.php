<?php
session_start();
include_once 'bd_conn.php';
include_once 'auth.php';

class auth
{
    public $login_1;
    public $pass_1;

    public function check_user()
    {   global $connect;
       $result =  mysqli_query($connect,"SELECT * FROM auth WHERE login = '{$this ->login_1}' AND pass = '{$this -> pass_1}'");
        $value = mysqli_num_rows($result);
        return $value;
}
}









