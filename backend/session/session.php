<?php 
	session_start();
	if(!isset($_SESSION['your_name'])){
        header('location: ../login.php');
    }else{
    	if($_SESSION['your_role'] == 2){
    		header('location: student_dashboard.php');
    	}
    }
 ?>