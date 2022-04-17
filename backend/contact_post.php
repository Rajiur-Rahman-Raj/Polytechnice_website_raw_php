
<?php 

	require_once '../backend/database/database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_subject = $_POST['user_subject'];
        $user_msg = $_POST['user_msg'];
        
        $add_contact_msg = "INSERT INTO contact_msg(user_name, user_email, user_subject,user_msg) VALUES('$user_name','$user_email','$user_subject','$user_msg')";
        mysqli_query($db,$add_contact_msg);
        header('location: ../contact.php?add_message=success');
    }
?>