<?php 

	require_once 'database/database.php';
	$galary_id = $_GET['galary_id'];
	$galary_img_name = $_GET['galary_img_name'];

	if($galary_img_name  == 'default_galary_img.jpg'){
		$delete_query = "DELETE FROM galaries WHERE id='$galary_id'";
		mysqli_query($db, $delete_query);
		header('location: our_galary.php');
	}else{
		$delete_query = "DELETE FROM galaries WHERE id='$galary_id'";
		mysqli_query($db, $delete_query);
		unlink('uploads/galary_img/'.$galary_img_name);
		header('location: our_galary.php');

	}

 ?>