<?php

	require_once 'database/database.php';

	$id = $_GET['id'];

	$delete_query = "DELETE FROM about_table WHERE id='$id'";

	mysqli_query($db, $delete_query);
	header('location: about_institute.php');

?>