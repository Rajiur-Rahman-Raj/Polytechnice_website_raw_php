<?php

	require_once 'database/database.php';
	$slider_id = $_GET['slider_id'];
	$deactive_query = "UPDATE slider_table SET slider_status = 2 Where id='$slider_id'";
	mysqli_query($db, $deactive_query);
	header('location: banner.php');
 ?>