<?php  include 'dashboad_location/dashboard_header.php';
       include 'database/database.php';
?>
    			<div class="content_right clear">
                    <div class="content">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="header.php">Add-Institute</a></li>
                            <li class="breadcrumb-item active" aria-current="">Edit_institute</li>
                          </ol>
                        </nav>
                        <h2> Edit Institute </h2>

                        <?php 

                        	$institute_id = $_GET['institute_id'];
                        	$get_institute_content = "SELECT * FROM institute WHERE id='$institute_id'";
                        	$select_query = mysqli_query($db,$get_institute_content);
                        	$after_assoc_get_content = mysqli_fetch_assoc($select_query);


                         ?>

                        <form action="institute_edit_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                                <tr>
                                	<td><input type="hidden" name="old_institute_id" value="<?= $after_assoc_get_content['id']; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="user_info">  institute_name : </td>
                                    <td> <input type="text" name="institute_name" value="<?= $after_assoc_get_content['institute_name'];  ?>"  class="form-control">
                                     </td>
                                </tr>
                                <tr>
                                   
                                    <td> <input type="hidden" name="old_institute_logo" value="<?= $after_assoc_get_content['institute_logo'];  ?>"  class="form-control">
                                     </td>
                                </tr>

                               
                                    <td class="user_info">  Slider_img  : </td>
                                     <td> <input type="file" name="new_institute_logo" class="form-control" style="margin-left:30px;">
                                     </td>

                                <tr>
                                    <td colspan="2"> <input type="submit" value="Edit-Slider">
                                     </td>
                                </tr>
                            </table>
                        </form>


                    </div>
    			</div>
    		 <?php include 'dashboad_location/dashboard_footer.php'; ?>