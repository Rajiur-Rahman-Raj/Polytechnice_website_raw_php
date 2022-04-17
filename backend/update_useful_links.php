<?php 
	
    require_once 'database/database.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$feature = $_POST['feature'];
		$description = $_POST['description'];

		$update_useful_links = "UPDATE useful_links SET title='$title', feature='$feature',description='$description' WHERE id='$id'";
		 $update_useful_links_query = mysqli_query($db, $update_useful_links);
        
         header('location: useful_links.php');
         
	}

 ?>