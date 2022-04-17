
<?php  include 'dashboad_location/dashboard_header.php';
       require_once 'database/database.php';
 ?>
    			<div class="content_right clear">
                    <div class="content">
                        <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="about_notice.php">Add important_links</a></li>
                            <li class="breadcrumb-item active" aria-current="">update important_links</li>
                          </ol>
                        </nav>
                        <h2> Update important_links.. </h2>

                        <?php 

                            $id = $_GET['id'];

                            $get_useful_links_id_value = "SELECT * FROM useful_links WHERE id='$id'";
                            $get_useful_links_value_query = mysqli_query($db,$get_useful_links_id_value);
                            $after_assoc_value = mysqli_fetch_assoc($get_useful_links_value_query);
                            
                         ?>

                        <form action="update_useful_links.php" method="post">
                            <table class="table">
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $after_assoc_value['id']; ?>"></td>
                                </tr>
                                
                                 <tr>
                                    <td class="user_info">Title</td>
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

                                    <td colspan="3"> <input type="submit" value="Update-useful_links" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        
                    </div>
    			</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
    		