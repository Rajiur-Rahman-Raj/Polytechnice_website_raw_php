<?php 
	
    require_once 'database/database.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$feature = $_POST['feature'];
		$description = $_POST['description'];

		$update_stu_info = "UPDATE student_info SET title='$title', feature='$feature',description='$description' WHERE id='$id'";
		 $update_stu_info_query = mysqli_query($db, $update_stu_info);
        
         header('location: student_info.php');
         
	}

 ?>