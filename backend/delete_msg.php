<?php 

	 require_once 'database/database.php';
	 $id = $_GET['id'];
	 $delete_msg = "DELETE FROM contact_msg WHERE id='$id'";
	 $delete_msg_query = mysqli_query($db, $delete_msg);
	 if($delete_msg_query){
	 	header('location: contact_us.php');
	 }else{
	 	echo "no";
	 }

	 

 ?>