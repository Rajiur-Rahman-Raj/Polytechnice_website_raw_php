
<?php  include 'dashboad_location/dashboard_header.php';
       require_once 'database/database.php';
 ?>
    			<div class="content_right clear">
                    <div class="content">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="status.php">Add-Status</a></li>
                            <li class="breadcrumb-item active" aria-current="">update_Status</li>
                          </ol>
                        </nav>
                        <h2> Update Status.. </h2>

                        <?php 

                            $id = $_GET['id'];

                            $get_status_id_value = "SELECT * FROM status_table WHERE id='$id'";
                            $get_status_value_query = mysqli_query($db,$get_status_id_value);
                            $after_assoc_value = mysqli_fetch_assoc($get_status_value_query);
                            
                         ?>

                        <form action="update_status.php" method="post">
                            <table class="table">
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $after_assoc_value['id']; ?>"></td>
                                </tr>
                                
                                <tr>
                                    <td class="user_info"> Stat name </td>
                                    <td> <input type="text" name="state_name" value="<?php echo $after_assoc_value['state_name']; ?>">
                                     </td>
                                </tr>

                                 <tr>
                                    <td class="user_info"> Font-Awesome </td>
                                    <td> <input type="text" class="" name="fontawesome" style="margin-left:30px;" value="<?php echo $after_assoc_value['fontawesome']; ?>">
                                     </td>
                                </tr>
                               <tr>
                                    <td class="user_info"> stat amount </td>
                                    <td><input type="number" name="stat_amount" class="form_textarea" value="<?php echo $after_assoc_value['stat_amount']; ?>">
                                        
                                 
                                    </td>
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
