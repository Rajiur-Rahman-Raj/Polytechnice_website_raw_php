
<?php  include 'dashboad_location/dashboard_header.php';
       require_once 'database/database.php';
 ?>
    			<div class="content_right clear">
                    <div class="content">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="about_notice.php">Add student_info</a></li>
                            <li class="breadcrumb-item active" aria-current="">update student_info</li>
                          </ol>
                        </nav>
                        <h2> Update Student_info.. </h2>

                        <?php 

                            $id = $_GET['id'];

                            $get_stu_info_id_value = "SELECT * FROM student_info WHERE id='$id'";
                            $get_stu_info_value_query = mysqli_query($db,$get_stu_info_id_value);
                            $after_assoc_value = mysqli_fetch_assoc($get_stu_info_value_query);
                            
                         ?>

                        <form action="update_stu_info.php" method="post">
                            <table class="table">
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $after_assoc_value['id']; ?>"></td>
                                </tr>
                                
                                <tr>
                                    <td class="user_info">  Title </td>
                                    <td> <input type="text" name="title" value="<?php echo $after_assoc_value['title']; ?>" >
                                     </td>
                                </tr>

                                 <tr>
                                    <td class="user_info">feature</td>
                                    <td> <input type="text" class="" name="feature" style="margin-left:30px;" value="<?php echo $after_assoc_value['feature']; ?>">
                                     </td>
                                </tr>
                               <tr>
                                    <td class="user_info"> description</td>
                                    <td>
                                    <input type="text" name="description" class="form_textarea" value="<?= $after_assoc_value['description'] ?>">
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="3"> <input type="submit" value="Update-stu_info" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        
                    </div>
    			</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
    		