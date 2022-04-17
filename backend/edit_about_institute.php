
<?php  include 'dashboad_location/dashboard_header.php';
       require_once 'database/database.php';
 ?>
    			<div class="content_right clear">
                    <div class="content">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="about_institute.php">About-Institute</a></li>
                            <li class="breadcrumb-item active" aria-current="">Edit_institute</li>
                          </ol>
                        </nav>
                        <h2> Edit institute.. </h2>

                        <?php 
                            $id = $_GET['id'];
                            $select_query = "SELECT * FROM about_table WHERE id='$id'";
                            $after_assoc = mysqli_query($db, $select_query);
                            $after_assoc_value = mysqli_fetch_assoc($after_assoc);
                         ?>

                        <form action="Edit_institute_post.php" method="post">
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
                                    <td class="user_info"> description</td>
                                    <td><textarea type="text" name="description" class="form_textarea">
                                        <?php echo $after_assoc_value['description']; ?>
                                    </textarea>
                                    </td>
                                </tr>
                                <tr>

                                    <td colspan="3"> <input type="submit" value="Update-institute" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        
                    </div>
    			</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
    		