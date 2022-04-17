
<?php  include 'session/session.php';?>
<?php  include 'dashboad_location/dashboard_header.php';
       require_once 'database/database.php';
 ?>

	<div class="content_right clear">
        <div class="content">
            <h2> UPDATE PASSWORD.. </h2>

            <?php 
                if($_SERVER['REQUEST_METHOD'] =='POST'){
                    $old_pass = md5($_POST['old_password']);

                    if($old_pass == $_SESSION['your_password']){
                        
                        $new_pass = md5($_POST['new_password']);
                        $pass = $_POST['new_password'];
                        $con_pass = md5($_POST['new_con_password']);
                        $id = $_POST['id'];
                        if($new_pass == $con_pass){
                            
                            if (strlen($pass) <= '8') {
                                    $errpassword = '<span style="color:red; margin-left:7px;"><i class="fas fa-times"></i><span>'." <span style='color:green'>Your Password Must Contain At Least 8 Characters!<span>";
                                    }
                                    elseif(!preg_match("#[0-9]+#",$pass)) {
                                        $errpassword ='<span style="color:red; margin-left:7px;"><i class="fas fa-times"></i><span>'." <span style='color:green'>Your Password Must Contain At Least 1 Number!<span>";
                                    }
                                    elseif(!preg_match("#[A-Z]+#",$pass)) {
                                        $errpassword ='<span style="color:red; margin-left:7px;"><i class="fas fa-times"></i><span>'." <span style='color:green'>Your Password Must Contain At Least 1 Capital Letter!<span>";
                                    }
                                    elseif(!preg_match("#[a-z]+#",$pass)) {
                                        $errpassword ='<span style="color:red; margin-left:7px;"><i class="fas fa-times"></i><span>'." <span style='color:green'>Your Password Must Contain At Least 1 Lowercase Letter!<span>";
                                    }else{
                                        
                                        $update_pass = "UPDATE `my_reg_table` SET `password`='$new_pass' WHERE id='$id'";

                                        if(mysqli_query($db,$update_pass)){ ?>
                                            <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                              <strong>HA..HA..HA</strong> Your Password has been Changed~~
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                        </div>
                                    <?php 
                                        }else{
                                            echo "not update";
                                        }
                            }

                        }else{
                            $pw_not_match ='<span style="color:red; margin-left:7px;"><i class="fas fa-times"></i><span>'." <span style='color:green'>password not match!<span>";
                        }
                    }else{
                        $wrong_pass = '<span style="color:red; margin-left:7px;"><i class="fas fa-times"></i><span>'." <span style='color:green'>Old Password is Wrong!<span>";
                    }
                }
             ?>
            <form action="change_password.php" method="post">
                <table class="table">
                    
                    <tr>
                        <td> <input type="hidden" name="id" value="<?php echo $_SESSION['your_id']; ?>">
                         </td>
                    </tr>

                    <tr>
                        <td class="user_info"> Old password : </td>
                        <td> <input type="password" name="old_password" placeholder="enter your old password" id="pass"><?php global $wrong_pass; echo "<br>".$wrong_pass; ?>
                        </td>
                        <td><span class="eye_icon" id="eye" style='margin-left:-35px;'><i class="fas fa-eye" ></i></span></td>

                    </tr>
                        <td class="user_info"> New password : </td>
                        <td> <input type="password" name="new_password" placeholder="Enter your new password" id="new_pass">
                         </td>
                         <td><span class="eye_icon" id="new_eye" style='margin-left:-35px;'><i class="fas fa-eye" ></i></span></td>
                         <td><?php global $errpassword; echo $errpassword; ?></td>
                    <tr>

                        <td class="user_info"> Confirm pass : </td>
                        <td> <input type="password" name="new_con_password" placeholder="Enter Your confirm password " id="con_pass">
                        <?php global $pw_not_match; echo "<br>".$pw_not_match; ?>
                         </td>
                        <td><span class="eye_icon" id="new_con_eye" style='margin-left:-35px;'><i class="fas fa-eye" ></i></span></td>
                    </tr>

                    <tr>
                        <td colspan="2"> <input type="submit" value="Changed">
                         </td>
                    </tr>
                </table>
            </form>
        </div>
	</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
    		