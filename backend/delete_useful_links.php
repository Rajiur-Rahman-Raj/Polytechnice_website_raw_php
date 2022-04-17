<?php 

	 require_once 'database/database.php';
	 $id = $_GET['id'];
	 $delete_useful_links = "DELETE FROM useful_links WHERE id='$id'";
	 $delete_useful_links_query = mysqli_query($db, $delete_useful_links);
	 if($delete_useful_links_query){
	 	header('location: useful_links.php');
	 }else{
	 	echo "no";
	 }

 ?>