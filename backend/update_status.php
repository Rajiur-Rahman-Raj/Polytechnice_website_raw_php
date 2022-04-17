<?php 
	
    require_once 'database/database.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['id'];
		$state_name = $_POST['state_name'];
		$fontawesome = $_POST['fontawesome'];
		$stat_amount = $_POST['stat_amount'];

		$update_stat = "UPDATE status_table SET state_name='$state_name', fontawesome='$fontawesome', stat_amount='$stat_amount' WHERE id='$id'";
		 $update_stat_query = mysqli_query($db, $update_stat);
        
         header('location: status.php');
         
	}

 ?>