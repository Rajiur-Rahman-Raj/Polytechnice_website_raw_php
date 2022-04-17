<?php 

	require_once 'database/database.php';
	$slider_id = $_GET['slider_id'];
	$slider_img_name = $_GET['slider_img_name'];

	if($slider_img_name  == 'default_slider.jpg'){
		$delete_query = "DELETE FROM slider_table WHERE id='$slider_id'";
		mysqli_query($db, $delete_query);
		header('location: banner.php');
	}else{
		$delete_query = "DELETE FROM slider_table WHERE id='$slider_id'";
		mysqli_query($db, $delete_query);
		unlink('uploads/slider_img/'.$slider_img_name);
		header('location: banner.php');

	}

 ?>