<?php 
	
	require_once 'database/database.php';

	$fontawesome = $_POST['fontawesome'];
	$state_name = $_POST['state_name'];
	$stat_amount = $_POST['stat_amount'];

	$insert_stat_query = "INSERT INTO status_table(state_name,fontawesome,stat_amount) VALUES('$state_name','$fontawesome','$stat_amount')";

	mysqli_query($db, $insert_stat_query);
	header('location: status.php?add_status=success');

?>