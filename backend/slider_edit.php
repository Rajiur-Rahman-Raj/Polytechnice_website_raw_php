<?php  include 'dashboad_location/dashboard_header.php';
       include 'database/database.php';
?>
    			<div class="content_right clear">
                    <div class="content">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="banner.php">About-Slider</a></li>
                            <li class="breadcrumb-item active" aria-current="">Edit_Slider</li>
                          </ol>
                        </nav>
                        <h2> Edit Slider </h2>

                        <?php 

                        	$slider_id = $_GET['slider_id'];
                        	$get_slider_content = "SELECT * FROM slider_table WHERE id='$slider_id'";
                        	$select_query = mysqli_query($db,$get_slider_content);
                        	$after_assoc_get_content = mysqli_fetch_assoc($select_query);


                         ?>

                        <form action="slider_edit_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                                <tr>
                                	<td><input type="hidden" name="slider_id" value="<?= $after_assoc_get_content['id']; ?>"></td>
                                </tr>
                                <tr>
                                    <td class="user_info">  Slider_Title : </td>
                                    <td> <input type="text" name="slider_title" value="<?= $after_assoc_get_content['slider_title'];  ?>"  class="form-control">
                                     </td>
                                </tr>
                                <tr>
                                   
                                    <td> <input type="hidden" name="slider_name" value="<?= $after_assoc_get_content['slider_img'];  ?>"  class="form-control">
                                     </td>
                                </tr>

                               
                                    <td class="user_info">  Slider_img  : </td>
                                     <td> <input type="file" name="slider_img" class="form-control" style="margin-left:30px;">
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