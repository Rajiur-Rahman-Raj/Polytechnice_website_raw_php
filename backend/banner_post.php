<?php 
	require_once 'database/database.php';
	$our_uploaded_img             = $_FILES['slider_img'];

	if($our_uploaded_img['name']){

	$our_uploaded_img_name        = $our_uploaded_img['name'];

	$after_explode_img_name       = explode('.', $our_uploaded_img_name);

	$our_uploaded_img_extention   = end($after_explode_img_name);

	$valid_image_extention        = array('jpg','JPG','PNG','png','jpeg','JPEG');  

	if(in_array($our_uploaded_img_extention, $valid_image_extention)){
		if($our_uploaded_img['size'] <= 2000000){
			
			$slider_title         = $_POST['slider_title'];
			$insert_query         = "INSERT INTO slider_table(slider_title) VALUES('$slider_title')";

			mysqli_query($db, $insert_query);

			$our_last_inserted_id = mysqli_insert_id($db);

			$new_uploaded_image_name  = $our_last_inserted_id.'.'.$our_uploaded_img_extention;

			$new_uploaded_image_location = 'uploads/slider_img/'.$new_uploaded_image_name;

			$old_uploaded_image_location = $our_uploaded_img['tmp_name'];

			move_uploaded_file($old_uploaded_image_location, $new_uploaded_image_location);

			$update_query = "UPDATE slider_table SET slider_img = '$new_uploaded_image_name' WHERE id='$our_last_inserted_id'";
			mysqli_query($db, $update_query);
			header('location: banner.php?add_banner=success');

		}else{
			echo "file size less then 2 mb..";
		}
	
	}else{
		echo "invalid image format";
	}

	}else{

		$slider_title             = $_POST['slider_title'];
		$insert_query             = "INSERT INTO slider_table(slider_title) VALUES('$slider_title')";

		mysqli_query($db, $insert_query);
		header('location: banner.php?add_banner=success');

	}

 ?>