<?php 

	 require_once 'database/database.php';
	 $id = $_GET['id'];
	 $delete_stu_info = "DELETE FROM student_info WHERE id='$id'";
	 $delete_stu_info_query = mysqli_query($db, $delete_stu_info);
	 if($delete_stu_info_query){
	 	header('location: student_info.php');
	 }else{
	 	echo "no";
	 }

 ?>