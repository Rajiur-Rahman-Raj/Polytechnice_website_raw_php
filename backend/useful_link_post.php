
<?php 

	require_once 'database/database.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $feature = $_POST['feature'];
        $description = $_POST['decription'];
        
        $add_useful_links = "INSERT INTO useful_links(title, feature, description) VALUES('$title','$feature','$description')";
        mysqli_query($db,$add_useful_links);
        header('location: useful_links.php?add_links=success');
    }
?>
