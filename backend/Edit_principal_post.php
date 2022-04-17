<?php 

	require_once 'database/database.php';
	

	$old_id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$old_p_img = $_POST['old_p_img'];
	$new_p_img = $_FILES['new_p_img'];
	$principal_name = $_POST['principal_name'];
	$principal_designation = $_POST['principal_designation'];
	$institute_name = $_POST['institute_name'];


	
	if($old_p_img != 'default_principal_img.jpg'){

		unlink($old_p_img);
		
	}

	$new_p_img_name = $new_p_img['name'];

	$after_explode = explode('.', $new_p_img_name);

	$new_p_img_extention = end($after_explode);

	$valid_extention_list = array('jpg','JPG','jpeg','JPEG','png','PNG');

	if(in_array($new_p_img_extention, $valid_extention_list)){
		if ($new_p_img['size'] <= 2000000) {
			
			$new_uploaded_p_img_name = $old_id.'.'.$new_p_img_extention;

			$new_uploaded_p_img_location = 'uploads/principal_img/'.$new_uploaded_p_img_name;

			move_uploaded_file($new_p_img['tmp_name'], $new_uploaded_p_img_location);

			$update_query = "UPDATE principal_message SET title='$title', description='$description', principal_img='$new_uploaded_p_img_name', principal_name='principal_name', principal_designation='principal_designation', institute_name='institute_name' Where id='$old_id'";

			mysqli_query($db, $update_query);

			header('location: about_Pricipal.php');


			
		}else{
			echo 'size is less then 2 mb..';

		}
	}else{
		echo "Invalid Img Format!";
	}





















	$update_query = "UPDATE principal_message SET title='$title', description='$description', principal_name='principal_name', principal_designation='principal_designation', institute_name='institute_name' Where id='$id'";

	mysqli_query($db, $update_query);

	header('location: about_Pricipal.php');

?>