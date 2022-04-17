<?php 
	require_once 'database/database.php';

	$id =$_GET['id'];
	$point_one = $_POST['point_one'];
	$point_two = $_POST['point_two'];
	$point_three = $_POST['point_three'];
	$point_four = $_POST['point_four'];
	$point_five = $_POST['point_five'];


	$update_query = "UPDATE quick_links SET point_one='$point_one', point_two='$point_two', point_three='$point_three', point_four='$point_four', point_five='$point_five' WHERE id='$id'";

	mysqli_query($db,$update_query);
	header('location: quick_link.php?add_quick_link=success');


?>