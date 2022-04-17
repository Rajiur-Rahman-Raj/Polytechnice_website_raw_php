<?php 
	require_once 'database/database.php';
	$old_slider_id = $_POST['slider_id'];
	$old_slider_title = $_POST['slider_title'];
	$old_slider_img_name  = $_POST['slider_name'];

	if($old_slider_img_name != 'default_slider.jpg'){

		unlink($old_slider_img_name);
		
	}

	$new_slider_img = $_FILES['slider_img'];

	$new_slider_img_name = $new_slider_img['name'];

	$after_explode = explode('.', $new_slider_img_name);

	$new_slider_img_extention = end($after_explode);

	$valid_extention_list = array('jpg','JPG','jpeg','JPEG','png','PNG');

	if(in_array($new_slider_img_extention, $valid_extention_list)){
		if ($new_slider_img['size'] <= 2000000) {
			
			$new_uploaded_img_name = $old_slider_id.'.'.$new_slider_img_extention;

			$new_uploaded_img_location = 'uploads/slider_img/'.$new_uploaded_img_name;

			move_uploaded_file($new_slider_img['tmp_name'], $new_uploaded_img_location);

			$update_new_slider_img = "UPDATE slider_table SET slider_title='$old_slider_title', slider_img ='$new_uploaded_img_name' WHERE id='$old_slider_id'";
			mysqli_query($db,$update_new_slider_img);
			header('location: banner.php');


			
		}else{
			

		}
	}else{
		echo "Invalid Img Format!";
	}
	
 ?>