<?php 
	
    require_once 'database/database.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['id'];
		$department_name = $_POST['department_name'];
		$fontawesome = $_POST['fontawesome'];
		$point_one = $_POST['point_one'];
		$point_two = $_POST['point_two'];
		$point_three = $_POST['point_three'];


		$update_departments = "UPDATE departments SET department_name='$department_name', fontawesome='$fontawesome', point_one='$point_one', point_two='$point_two', point_three='$point_three' WHERE id='$id'";
		 $update_departments_query = mysqli_query($db, $update_departments);
        
         header('location: our_departments.php');
         
	}

 ?>