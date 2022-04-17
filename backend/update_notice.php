<?php 
	
    require_once 'database/database.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$date = $_POST['date'];
		$description = $_POST['description'];

		$update_notice = "UPDATE `notices` SET `title`='$title',`date`='$date',`description`='$description' WHERE id='$id'";
		 $update_notice_query = mysqli_query($db, $update_notice);
        
         header('location: about_notice.php');
         
	}

 ?>