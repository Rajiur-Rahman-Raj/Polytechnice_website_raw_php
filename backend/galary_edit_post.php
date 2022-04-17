<?php 
	require_once 'database/database.php';
	$old_galary_id = $_POST['old_galary_id'];
	$old_galary_img_name  = $_POST['galary_name'];


	if($old_galary_img_name != 'default_galary_img.jpg'){

		unlink('uploads/galary_img/'.$old_galary_img_name);
		
	}

	$new_galary_img = $_FILES['new_galary_img'];
	
	$new_galary_img_name = $new_galary_img['name'];
	
	$after_explode = explode('.', $new_galary_img_name);

	$new_galary_img_extention = end($after_explode);

	$valid_extention_list = array('jpg','JPG','jpeg','JPEG','png','PNG');

	if(in_array($new_galary_img_extention, $valid_extention_list)){
		if ($new_galary_img['size'] <= 2000000) {
			
			$new_uploaded_img_name = $old_galary_id.'.'.$new_galary_img_extention;

			$new_uploaded_img_location = 'uploads/galary_img/'.$new_uploaded_img_name;

			move_uploaded_file($new_galary_img['tmp_name'], $new_uploaded_img_location);

			$update_new_galary_img = "UPDATE galaries SET galary_img ='$new_uploaded_img_name' WHERE id='$old_galary_id'";
			mysqli_query($db,$update_new_galary_img);
			header('location: our_galary.php');
			
		}else{
			

		}
	}else{
		echo "Invalid Img Format!";
	}
	
 ?>