<?php 
	
    require_once 'database/database.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['id'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$location = $_POST['location'];
		$facebook = $_POST['facebook'];
		$twitter = $_POST['twitter'];
		$googleplus = $_POST['googleplus'];
		$instagram = $_POST['instagram'];

		$update_social_link = "UPDATE `social_link` SET `phone`='$phone',`email`='$email',`address`='$address', location='$location', facebook='$facebook', twitter='$twitter', googleplus= '$googleplus', instagram='$instagram' WHERE id='$id'";
		 $update_social_query = mysqli_query($db, $update_social_link);
        
         header('location: social_link.php?social_link=success');
         
	}

 ?>