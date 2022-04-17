<?php  include 'dashboad_location/dashboard_header.php';
       include 'database/database.php';
?>
    			<div class="content_right clear">
                    <div class="content">
                         <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="our_galary.php">Add-Galary</a></li>
                            <li class="breadcrumb-item active" aria-current="">update_galary</li>
                          </ol>
                        </nav>
                        <h2> Edit Galary </h2>

                        <?php 

                        	$galary_id = $_GET['galary_id'];
                        	$get_galary_content = "SELECT * FROM galaries WHERE id='$galary_id'";
                        	$select_query = mysqli_query($db,$get_galary_content);
                        	$after_assoc_get_content = mysqli_fetch_assoc($select_query);


                         ?>

                        <form action="galary_edit_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                                <tr>
                                	<td><input type="hidden" name="old_galary_id" value="<?= $after_assoc_get_content['id']; ?>"></td>
                                </tr>
                                
                                <tr>
                                   
                                    <td> <input type="hidden" name="galary_name" value="<?= $after_assoc_get_content['galary_img'];  ?>"  class="form-control">
                                     </td>
                                </tr>

                               
                                    <td class="user_info">  galary_img  : </td>
                                     <td> <input type="file" name="new_galary_img" class="form-control" style="margin-left:30px;">
                                     </td>

                                <tr>
                                    <td colspan="2"> <input type="submit" value="Edit-galary">
                                     </td>
                                </tr>
                            </table>
                        </form>


                    </div>
    			</div>
    		 <?php include 'dashboad_location/dashboard_footer.php'; ?>