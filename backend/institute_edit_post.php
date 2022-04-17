<?php 
	require_once 'database/database.php';
	$old_institute_id = $_POST['old_institute_id'];
	$institute_name = $_POST['institute_name'];
	$old_institute_logo  = $_POST['old_institute_logo'];
	$new_institute_logo  = $_FILES['new_institute_logo'];


	if($old_institute_logo != 'default_institute_logo.jpg'){

		unlink('uploads/institute_logo'.$old_institute_logo);
		
	}

	$new_institute_logo_name = $new_institute_logo['name'];

	$after_explode = explode('.', $new_institute_logo_name);

	$new_institute_logo_extention = end($after_explode);

	$valid_extention_list = array('jpg','JPG','jpeg','JPEG','png','PNG');

	if(in_array($new_institute_logo_extention, $valid_extention_list)){
		if ($new_institute_logo['size'] <= 2000000) {
			
			$new_uploaded_institute_logo = $old_institute_id.'.'.$new_institute_logo_extention;

			$new_uploaded_logo_location = 'uploads/institute_logo/'.$new_uploaded_institute_logo;

			move_uploaded_file($new_institute_logo['tmp_name'], $new_uploaded_logo_location);

			$update_new_institute_logo = "UPDATE institute SET institute_name='$institute_name', institute_logo ='$new_uploaded_institute_logo' WHERE id='$old_institute_id'";
			mysqli_query($db,$update_new_institute_logo);
			header('location: header.php');


			
		}else{
			

		}
	}else{
		echo "Invalid Img Format!";
	}
	
 ?>