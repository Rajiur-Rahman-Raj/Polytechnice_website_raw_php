<?php  include 'dashboad_location/dashboard_header.php';
       include 'database/database.php';
?>
    			<div class="content_right clear">
                    <div class="content">
                        <h2> Add Slider </h2>
                         <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_banner=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>
                        <form action="banner_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                                
                                <tr>
                                    <td class="user_info">  Slider_Title : </td>
                                    <td> <input type="text" name="slider_title" placeholder="Add Your slider title"  class="form-control">
                                     </td>
                                </tr>

                               
                                    <td class="user_info">  Slider_img  : </td>
                                     <td> <input type="file" name="slider_img" class="form-control"  style="margin-left:30px;">
                                     </td>

                                <tr>
                                    <td colspan="2"> <input type="submit" value="Add-Slider">
                                     </td>
                                </tr>
                            </table>
                        </form>

                         <h2>View Slider</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>Slider_Title</th>
                                <th>Slider_img</th>
                                <th>Slider_status</th>
                                <th>action</th>
                            </tr>
                            <?php 
                                $select_all = "SELECT * FROM slider_table";
                                $select_query = mysqli_query($db, $select_all);
                                foreach($select_query as $value) {
                                   ?>

                                <tr>
                                    
                                    <td><?= $value['slider_title']; ?></td>
                                    <td>
                                         <img src="uploads/slider_img/<?= $value['slider_img']; ?>" width="100" height='50px'>
                                    </td>
                                    <td>
                                        <?php 
                                            if($value['slider_status'] == 1){
                                                echo 'active';
                                            }else{
                                                echo "deactive";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                       <?php 
                                            if($value['slider_status'] == 1){
                                                ?>
                                             <a href="slider_deactive.php?slider_id=<?php echo $value['id']; ?>" class="btn btn-primary btn-sm">Deactive</a>
                                            <?php   
                                            }else{
                                                ?>
                                                <a href="slider_active.php?slider_id=<?php echo $value['id']; ?>" class="btn btn-success btn-sm">Active</a>
                                            <?php
                                            }
                                        ?>
                                       
                                        | <a href="slider_edit.php?slider_id=<?php echo $value['id']; ?> & slider_img_name=<?php echo $value['slider_img']; ?>"  class="btn btn-warning btn-sm">Edit</a>

                                         | <a href="slider_delete.php?slider_id=<?php echo $value['id']; ?> & slider_img_name=<?php echo $value['slider_img']; ?>"  class="btn btn-danger btn-sm" onclick='return confirm(" are you sure delete data [ <?php echo $value['slider_img']; ?> ] ")'>Delete</a>

                                    </td>
                                </tr>

                                <?php  
                                }
                             ?>
                           

                        </table>
                    </div>
    			</div>
    		 <?php include 'dashboad_location/dashboard_footer.php'; ?>