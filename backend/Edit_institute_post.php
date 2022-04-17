<?php 

	require_once 'database/database.php';

	$id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];

	$update_query = "UPDATE about_table SET title='$title', description='$description' Where id='$id'";

	mysqli_query($db, $update_query);

	header('location: about_institute.php');

?>