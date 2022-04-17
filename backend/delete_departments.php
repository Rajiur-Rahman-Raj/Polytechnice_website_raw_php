<?php 

	 require_once 'database/database.php';
	 $id = $_GET['id'];
	 $delete_department = "DELETE FROM departments WHERE id='$id'";
	 $delete_department_query = mysqli_query($db, $delete_department);
	 if($delete_department_query){
	 	header('location: our_departments.php');
	 }else{
	 	echo "no";
	 }

	 

 ?>