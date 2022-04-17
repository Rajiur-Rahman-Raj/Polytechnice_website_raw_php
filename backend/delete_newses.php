<?php 

	require_once 'database/database.php';
	$id = $_GET['id'];
	$newses_img_name = $_GET['img_name'];

	if($newses_img_name  == 'default_latest_news_img.jpg'){
		$delete_query = "DELETE FROM latest_news WHERE id='$id'";
		mysqli_query($db, $delete_query);
		header('location: latest_news.php');
	}else{
		$delete_query = "DELETE FROM latest_news WHERE id='$id'";
		mysqli_query($db, $delete_query);
		unlink('uploads/latest_new_img/'.$newses_img_name);
		header('location: latest_news.php');

	}

 ?>