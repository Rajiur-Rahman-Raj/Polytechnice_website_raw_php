<?php 
	
	require_once 'database/database.php';

	$department_name = $_POST['department_name'];
	$fontawesome = $_POST['fontawesome'];
	$point_one = $_POST['point_one'];
	$point_two = $_POST['point_two'];
	$point_three = $_POST['point_three'];
	
	$insert_department_query = "INSERT INTO departments(department_name,fontawesome,point_one,point_two,point_three) VALUES('$department_name','$fontawesome','$point_one','$point_two','$point_three')";

	mysqli_query($db, $insert_department_query);
	header('location: our_departments.php?add_department=success');

?>