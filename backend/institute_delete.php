<?php 

	require_once 'database/database.php';
	$institute_id = $_GET['institute_id'];
	$institute_img_name = $_GET['institute_img_name'];

	if($institute_img_name  == 'default_institute_logo.jpg'){
		$delete_query = "DELETE FROM institute WHERE id='$institute_id'";
		mysqli_query($db, $delete_query);
		header('location: header.php');
	}else{
		$delete_query = "DELETE FROM institute WHERE id='$institute_id'";
		mysqli_query($db, $delete_query);
		unlink('uploads/institute_logo/'.$institute_img_name);
		header('location: header.php');

	}

 ?>