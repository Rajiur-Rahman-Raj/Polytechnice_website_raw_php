<?php 
	
	require_once 'database/database.php';
	
	$title = $_POST['title'];
	$description = $_POST['description'];
	$principal_name = $_POST['principal_name'];
	$principal_designation = $_POST['principal_designation'];
	$institute_name = $_POST['institute_name'];
	

	$uploaded_principal_img = $_FILES['principal_img'];

	if ($uploaded_principal_img['name']){

		$uploaded_principal_img_name = $uploaded_principal_img['name'];

		$after_explode = explode('.', $uploaded_principal_img_name);

		$uploaded_principal_img_extention = end($after_explode);

		$valid_img_extention = array('jpg','JPG','jpeg','JPEG','png','PNG');

		if (in_array($uploaded_principal_img_extention, $valid_img_extention)) {

			if ($uploaded_principal_img['size'] <= 2000000) {

				$insert_principal_query = "INSERT INTO principal_message(title,description,principal_name,principal_designation,institute_name) VALUES('$title','$description','$principal_name','$principal_designation','$institute_name')";
				mysqli_query($db, $insert_principal_query);

				$last_inserted_id = mysqli_insert_id($db);
				$new_principal_img_name = $last_inserted_id.'.'.$uploaded_principal_img_extention; 

				$new_uploaded_img_location = 'uploads/principal_img/'.$new_principal_img_name;

				$old_uploaded_img_location = $uploaded_principal_img['tmp_name'];
				move_uploaded_file($old_uploaded_img_location, $new_uploaded_img_location);

				$update_query ="UPDATE principal_message SET principal_img='$new_principal_img_name' WHERE id='$last_inserted_id'";
				mysqli_query($db, $update_query);
				header('location: about_Pricipal.php?add_principal=success');
				
			}else{
				echo 'image size must be less then 2mb..';
			}

			
		}else{
			echo 'invalid format';
		}
		
	}else{

		$insert_principal_query = "INSERT INTO principal_message(title,description,principal_name,principal_designation,institute_name) VALUES('$title','$description','$principal_name','$principal_designation','$institute_name')";
		mysqli_query($db, $insert_principal_query);
		header('location: about_Pricipal.php?add_principal=success');

	}

	


?>