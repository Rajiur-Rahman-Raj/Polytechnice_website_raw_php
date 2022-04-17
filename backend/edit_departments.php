
<?php  include 'dashboad_location/dashboard_header.php';
       require_once 'database/database.php';
 ?>
	<div class="content_right clear">
        <div class="content">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item"><a href="our_departments.php">Add-Departments</a></li>
                <li class="breadcrumb-item active" aria-current="">update_Departments</li>
              </ol>
            </nav>
            <h2> Update Departments.. </h2>

            <?php 

                $id = $_GET['id'];

                $get_department_id_value = "SELECT * FROM departments WHERE id='$id'";
                $get_department_value_query = mysqli_query($db,$get_department_id_value);
                $after_assoc_value = mysqli_fetch_assoc($get_department_value_query);
                
             ?>

            <form action="edit_department_post.php" method="post">
                <table class="table">
                    <tr>
                        <td></td>
                        <td><input type="hidden" name="id" value="<?php echo $after_assoc_value['id']; ?>"></td>
                    </tr>
                    
                    <tr>
                        <td class="user_info"> Department-name </td>
                        <td> <input type="text" name="department_name" value="<?php echo $after_assoc_value['department_name']; ?>">
                         </td>
                    </tr>

                     <tr>
                        <td class="user_info"> Font-Awesome </td>
                        <td> <input type="text" class="" name="fontawesome" style="margin-left:30px;" value="<?php echo $after_assoc_value['fontawesome']; ?>">
                         </td>
                    </tr>
                   
                     <tr>
                        <td class="user_info">point-one</td>
                        <td><input type="text" name="point_one" value="<?php echo $after_assoc_value['point_one']; ?>" ></td>           
                    </tr>

                    <tr>
                        <td class="user_info">point-two</td>
                        <td><input type="text" name="point_two" value="<?php echo $after_assoc_value['point_two']; ?>" ></td>           
                    </tr>

                    <tr>
                        <td class="user_info">point-three</td>
                        <td><input type="text" name="point_three" value="<?php echo $after_assoc_value['point_three']; ?>" ></td>           
                    </tr>

                    <tr>

                        <td colspan="3"> <input type="submit" value="Update-stat" style="margin-left: 143px;">
                         </td>
                    </tr>
                </table>
            </form>
            
        </div>
	</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
