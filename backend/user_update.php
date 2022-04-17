
<?php include 'session/session.php';?>
<?php include 'dashboad_location/dashboard_header.php'; ?>

	<div class="content_right clear">
        <div class="content">
            <h2> USER UPDATE </h2>

            <?php 

                if($_SERVER['REQUEST_METHOD'] =='POST'){
                   $id = $_POST['id'];
                   $name = $_POST['name'];
                   $email = $_POST['email'];

                   require_once 'database/database.php';

                   $update_query = "UPDATE my_reg_table SET name = '$name', email = '$email' WHERE id = '$id'";

                   if(mysqli_query($db, $update_query)){
                        $_SESSION['your_name'] = $name; 
                        $_SESSION['your_email'] = $email; 
                    ?>

                  <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                  <strong>Good!..</strong> Your Profile Update successfully~~
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                    <?php
                        
                   }else{
                    echo "no";
                   }
                }
               


             ?>

            <form action="" method="post">
                <table class="table">
                    <tr>
                        <td></td>
                        <td><input type="hidden" name="id" value="<?php echo $_SESSION['your_id']; ?>"></td>
                    </tr>
                    <tr>
                        <td class="user_info"> User-Name : </td>
                        <td> <input type="text" name="name" value="<?php echo $_SESSION['your_name']; ?>">
                         </td>
                    </tr>

                   
                        <td class="user_info"> Email-Address : </td>
                        <td> <input type="email" name="email" value="<?php echo $_SESSION['your_email']; ?>">
                         </td>
                    
                    <tr>
                        <td colspan="2"> <input type="submit" value="Update">
                         </td>
                    </tr>
                </table>
            </form>


            <table class="update_table">
                <thead>
                    <tr class="u_head">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                
                <tr class="u_data">
                    <td><?php echo $_SESSION['your_id']; ?></td>
                    <td><?php echo $_SESSION['your_name']; ?></td>
                    <td><?php echo $_SESSION['your_email']; ?></td>
                </tr>
            </table>
        </div>
	</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
    		