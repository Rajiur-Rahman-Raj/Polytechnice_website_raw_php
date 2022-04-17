 <?php 
  require_once 'database/database.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $our_uploaded_img = $_FILES['l_img'];
      $title = $_POST['title'];
      $author_name = $_POST['author_name'];
      $date = $_POST['date'];
      $description = $_POST['description'];

      if($our_uploaded_img['name']){

        $our_uploaded_img_name        = $our_uploaded_img['name'];

        $after_explode_img_name       = explode('.', $our_uploaded_img_name);

        $our_uploaded_img_extention   = end($after_explode_img_name);

        $valid_image_extention        = array('jpg','JPG','PNG','png','jpeg','JPEG');  

      if(in_array($our_uploaded_img_extention, $valid_image_extention)){
        if($our_uploaded_img['size'] <= 2000000){
          
          $insert_query         = "INSERT INTO latest_news(title,author_name,date,description) VALUES('$title','$author_name','$date','$description')";

          mysqli_query($db, $insert_query);

          $our_last_inserted_id = mysqli_insert_id($db);

          $new_uploaded_image_name  = $our_last_inserted_id.'.'.$our_uploaded_img_extention;

          $new_uploaded_image_location = 'uploads/latest_new_img/'.$new_uploaded_image_name;

          $old_uploaded_image_location = $our_uploaded_img['tmp_name'];

          move_uploaded_file($old_uploaded_image_location, $new_uploaded_image_location);

          $update_query = "UPDATE  latest_news SET img = '$new_uploaded_image_name' WHERE id='$our_last_inserted_id'";
          mysqli_query($db, $update_query);
          header('location: latest_news.php');

        }else{
          echo "file size less then 2 mb..";
        }
      
      }else{
        echo "invalid image format";
      }

      }else{

         $insert_query         = "INSERT INTO latest_news(title,author_name,date,description) VALUES('$title','$author_name','$date','$description')";

        mysqli_query($db, $insert_query);
        header('location: latest_news.php');

      }
    }
?>