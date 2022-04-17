<?php 
	require_once 'database/database.php';
	$our_uploaded_img             = $_FILES['institute_Logo'];

	if($our_uploaded_img['name']){

		$our_uploaded_img_name        = $our_uploaded_img['name'];

		$after_explode_img_name       = explode('.', $our_uploaded_img_name);

		$our_uploaded_img_extention   = end($after_explode_img_name);

		$valid_image_extention        = array('jpg','JPG','PNG','png','jpeg','JPEG');  

	if(in_array($our_uploaded_img_extention, $valid_image_extention)){
		if($our_uploaded_img['size'] <= 2000000){
			
			$institute_name         = $_POST['institute_name'];
			$insert_query         = "INSERT INTO institute(institute_name) VALUES('$institute_name')";

			mysqli_query($db, $insert_query);

			$our_last_inserted_id = mysqli_insert_id($db);

			$new_uploaded_image_name  = $our_last_inserted_id.'.'.$our_uploaded_img_extention;

			$new_uploaded_image_location = 'uploads/institute_logo/'.$new_uploaded_image_name;

			$old_uploaded_image_location = $our_uploaded_img['tmp_name'];

			move_uploaded_file($old_uploaded_image_location, $new_uploaded_image_location);

			$update_query = "UPDATE institute SET institute_logo = '$new_uploaded_image_name' WHERE id='$our_last_inserted_id'";
			mysqli_query($db, $update_query);
			header('location: header.php?add_header=success');

		}else{
			echo "file size less then 2 mb..";
		}
	
	}else{
		echo "invalid image format";
	}

	}else{

		$institute_name         = $_POST['institute_name'];
		$insert_query         = "INSERT INTO institute(institute_name) VALUES('$institute_name')";

		mysqli_query($db, $insert_query);
		header('location: header.php?add_header=success');

	}

 ?>