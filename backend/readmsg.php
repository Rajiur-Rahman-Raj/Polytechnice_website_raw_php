<?php

	require_once 'database/database.php';
	$read_msg_id = $_GET['id'];
	$active_msg_query = "UPDATE contact_msg SET read_msg = 2 Where id='$read_msg_id'";
	mysqli_query($db, $active_msg_query);
	header('location: contact_us.php');
 ?>