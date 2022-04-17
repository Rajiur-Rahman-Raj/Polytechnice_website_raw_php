
<?php 

	require_once 'database/database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $feature = $_POST['feature'];
        $description = $_POST['decription'];
        
        $add_stu_info = "INSERT INTO student_info(title, feature, description) VALUES('$title','$feature','$description')";
        mysqli_query($db,$add_stu_info);
        header('location: student_info.php?add_student_info=success"');
    }
    else{

    }
    
?>
