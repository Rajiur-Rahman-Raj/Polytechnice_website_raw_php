
<?php  include 'dashboad_location/dashboard_header.php';
       require_once 'database/database.php';
 ?>
    			<div class="content_right clear">
                    <div class="content">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="about_notice.php">Add-Notice</a></li>
                            <li class="breadcrumb-item active" aria-current="">update_notice</li>
                          </ol>
                        </nav>
                        <h2> Update Notice.. </h2>

                        <?php 

                            $id = $_GET['id'];

                            $get_notice_id_value = "SELECT * FROM notices WHERE id='$id'";
                            $get_notice_value_query = mysqli_query($db,$get_notice_id_value);
                            $after_assoc_value = mysqli_fetch_assoc($get_notice_value_query);
                            
                         ?>

                        <form action="update_notice.php" method="post">
                            <table class="table">
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $after_assoc_value['id']; ?>"></td>
                                </tr>
                                
                                <tr>
                                    <td class="user_info">  Title </td>
                                    <td> <input type="text" name="title" value="<?php echo $after_assoc_value['title']; ?>">
                                     </td>
                                </tr>

                                 <tr>
                                    <td class="user_info">Date</td>
                                    <td> <input type="date" class="" name="date" style="margin-left:30px;" value="<?php echo $after_assoc_value['date']; ?>">
                                     </td>
                                </tr>
                               <tr>
                                    <td class="user_info"> description</td>
                                    <td><textarea type="text" name="description" class="form_textarea">
                                        <?php echo $after_assoc_value['description']; ?>
                                    </textarea>
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="3"> <input type="submit" value="Update-notices" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        
                    </div>
    			</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
    		