<?php
	
	if (!isset($_COOKIE['count'])){
		$count=0;
	} else {
		$count=$_COOKIE['count'];
		$count++;
	}	
	setcookie('count', $count , time()+3600);
	echo "Вы были на этом сайте '.$count.' раз";
?>