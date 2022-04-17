<?php 

	 require_once 'database/database.php';
	 $id = $_GET['id'];
	 $delete_stat = "DELETE FROM status_table WHERE id='$id'";
	 $delete_stat_query = mysqli_query($db, $delete_stat);
	 if($delete_stat_query){
	 	header('location: status.php');
	 }else{
	 	echo "no";
	 }

	 

 ?>