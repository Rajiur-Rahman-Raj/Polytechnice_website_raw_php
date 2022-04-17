<?php  include 'dashboad_location/dashboard_header.php';
       include 'database/database.php';
?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add Galaries </h2>
                         <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_galary=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>
                        <form action="galary_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                                
                                <tr>
                                    <td class="user_info">  Galary-Tag : </td>
                                    <td>
                                        <select name="tag" class="form-control">
                                            <option value="">--select one--</option>
                                            
                                            <option value="campusphoto">Campus photo</option>
                                            <option value="Cocurriculamactivities">Co-curriculam activities</option>
                                            <option value="sports">sports</option>
                                            <option value="successphoto">success photo gallery</option>
                                        </select>
                                    </td>
                                </tr>

                               
                                    <td class="user_info"> Galary_img  : </td>
                                     <td> <input type="file" name=" galary_img" class="form-control"  style="margin-left:30px;">
                                     </td>

                                <tr>
                                    <td colspan="2"> <input type="submit" value="Add-Galary">
                                     </td>
                                </tr>
                            </table>
                        </form>

                         <h2>View Galaries</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>Galary-Tag</th>
                                <th>Galary-img</th>
                                <th>Galary_status</th>
                                <th>action</th>
                            </tr>
                            <?php 
                                $select_all = "SELECT * FROM galaries";
                                $select_query = mysqli_query($db, $select_all);
                                foreach($select_query as $value) {
                                   ?>

                                <tr>
                                    
                                    <td><?= $value['tag']; ?></td>
                                    <td>
                                         <img src="uploads/galary_img/<?= $value['galary_img']; ?>" width="100" height='50px'>
                                    </td>
                                    <td>
                                        <?php 
                                            if($value['galary_status'] == 1){
                                                echo 'active';
                                            }else{
                                                echo "deactive";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                       <?php 
                                            if($value['galary_status'] == 1){
                                                ?>
                                             <a href="galary_deactive.php?galary_id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm">Deactive</a>
                                            <?php   
                                            }else{
                                                ?>
                                                <a href="galary_active.php?galary_id=<?php echo $value['id']; ?>" class="btn btn-success btn-sm">Active</a>
                                            <?php
                                            }
                                        ?>
                                       
                                        | <a href="galary_edit.php?galary_id=<?php echo $value['id']; ?> & galary_img_name=<?php echo $value['galary_img']; ?>"  class="btn btn-warning btn-sm">Edit</a>

                                         | <a href="galary_delete.php?galary_id=<?php echo $value['id']; ?> & galary_img_name=<?php echo $value['galary_img']; ?>"  class="btn btn-danger btn-sm" onclick='return confirm(" are you sure delete image [ <?php echo $value['galary_img']; ?> ] ")'>Delete</a>

                                    </td>
                                </tr>

                                <?php  
                                }
                             ?>
                           

                        </table>
                    </div>
                </div>
             <?php include 'dashboad_location/dashboard_footer.php'; ?>