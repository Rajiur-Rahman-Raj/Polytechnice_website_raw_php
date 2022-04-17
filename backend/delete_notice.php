<?php 

	 require_once 'database/database.php';
	 	$id = $_GET['id'];
	 $delete_notice = "DELETE FROM notices WHERE id='$id'";
	 $delete_notice_query = mysqli_query($db, $delete_notice);
	 if($delete_notice_query){
	 	header('location: about_notice.php');
	 }else{
	 	echo "no";
	 }

	 

 ?>