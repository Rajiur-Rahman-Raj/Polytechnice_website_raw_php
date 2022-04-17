<?php

	define('HOST_NAME', 'localhost');
	define('USER_NAME', 'root');
	define('PASSWORD', '');
	define('DATABASE_NAME', 'web_institute');
	$db = mysqli_connect( HOST_NAME , USER_NAME , PASSWORD , DATABASE_NAME);

	if($db){
	}else{
		echo " not connected";
	}
 ?>
 