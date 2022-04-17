<?php 
	
	require_once 'database/database.php';

	$title = $_POST['title'];
	$description = $_POST['description'];

	$insert_about_query = "INSERT INTO about_table(title,description) VALUES('$title','$description')";

	mysqli_query($db, $insert_about_query);
	header('location: about_institute.php?add_about=success');

?>