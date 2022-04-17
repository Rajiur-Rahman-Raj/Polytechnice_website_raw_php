<?php 

	require_once 'database/database.php';
	$principal_id = $_GET['principal_id'];
	$principal_img_name = $_GET['principal_img'];
	print_r($_GET);

	if($principal_img_name  == 'default_principal_img.jpg'){
		$delete_query = "DELETE FROM  principal_message WHERE id='$principal_id'";
		mysqli_query($db, $delete_query);
		header('location: about_pricipal.php');
	}else{
		$delete_query = "DELETE FROM principal_message WHERE id='$principal_id'";
		mysqli_query($db, $delete_query);
		unlink('uploads/principal_img/'.$principal_img_name);
		header('location: about_pricipal.php');

	}

 ?>