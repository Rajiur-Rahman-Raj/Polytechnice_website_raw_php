<?php

	require_once 'database/database.php';
	$galary_id = $_GET['galary_id'];
	$deactive_query = "UPDATE galaries SET galary_status = 2 Where id='$galary_id'";
	mysqli_query($db, $deactive_query);
	header('location: our_galary.php');
 ?>