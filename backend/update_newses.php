<?php 
	
    require_once 'database/database.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$old_news_id = $_POST['id'];
		$old_news_img = $_POST['old_img'];
		$new_img = $_FILES['new_img'];
		$title = $_POST['title'];
		$author_name = $_POST['author_name'];
		$date = $_POST['date'];
		$description = $_POST['description'];


		if($old_news_img != 'default_latest_news_img.jpg'){

			unlink('uploads/latest_new_img/'.$old_news_img);
		
		}

		$new_img_name = $new_img['name'];

		$after_explode = explode('.', $new_img_name);

		$new_newses_img_extention = end($after_explode);

		$valid_extention_list = array('jpg','JPG','jpeg','JPEG','png','PNG');

		if(in_array($new_newses_img_extention, $valid_extention_list)){
			if ($new_img['size'] <= 2000000) {
				
				$new_uploaded_img_name = $old_news_id.'.'.$new_newses_img_extention;

				$new_uploaded_img_location = 'uploads/latest_new_img/'.$new_uploaded_img_name;

				move_uploaded_file($new_img['tmp_name'], $new_uploaded_img_location);

				$update_new_newses_img = "UPDATE  latest_news SET img='$new_uploaded_img_name', title ='$title', author_name='$author_name', date='$date', description='$description' WHERE id='$old_news_id'";
				mysqli_query($db,$update_new_newses_img);
				
				header('location: latest_news.php');


				
			}else{
				
				echo 'image size must be less then 2 mb..';
			}
		}else{
			echo "Invalid Img Format!";
		}
         
	}

 ?>