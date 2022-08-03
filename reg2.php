<?php
	print_r($_POST);
  echo "<br>";
  $existed_user = "admin";
  $login = htmlspecialchars($_POST['login']);
  $password = htmlspecialchars($_POST['password']);
	if ($login != $existed_user)
  {
    #ф-я отправки в базу
		echo "Вы успешно зарегистрированы!<br>";
	} else {
		echo "Вы уже регистрировались ранее на этом сайте!<br>";
	}

?>