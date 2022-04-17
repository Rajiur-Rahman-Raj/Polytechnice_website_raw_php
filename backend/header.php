<?php  include 'dashboad_location/dashboard_header.php';
       include 'database/database.php';
?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add Institute Name/Logo </h2>
                        <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_header=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>
                        <form action="institute_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                                
                                <tr>
                                    <td class="user_info">  Institute_Name </td>
                                    <td> <input type="text" name="institute_name" placeholder="Add Your institute title"  class="form-control">
                                     </td>
                                </tr>

                               
                                    <td class="user_info">  Institute_Logo </td>
                                     <td> <input type="file" name="institute_Logo" class="form-control"  style="margin-left:30px;">
                                     </td>

                                <tr>
                                    <td colspan="2"> <input type="submit" value="Add-institute">
                                     </td>
                                </tr>
                            </table>
                        </form>

                         <h2>View Slider</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>institute_name</th>
                                <th>institute_logo</th>
                                <th>action</th>
                            </tr>
                            <?php 
                                $select_all = "SELECT * FROM  institute";
                                $select_query = mysqli_query($db, $select_all);
                                foreach($select_query as $value) {
                                   ?>

                                <tr>
                                    
                                    <td><?= $value['institute_name']; ?></td>
                                    <td>
                                         <img src="uploads/institute_logo/<?= $value['institute_logo']; ?>" width="100" height='50px'>
                                    </td>
                                    <td>
                                       
                                        | <a href="institute_edit.php?institute_id=<?php echo $value['id']; ?> & institute_img_name=<?php echo $value['institute_logo']; ?>"  class="btn btn-warning btn-sm">Edit</a>

                                         | <a href="institute_delete.php?institute_id=<?php echo $value['id']; ?> & institute_img_name=<?php echo $value['institute_logo']; ?>"  class="btn btn-danger btn-sm" onclick='return confirm(" are you sure delete data [ <?php echo $value['slider_img']; ?> ] ")'>Delete</a>

                                    </td>
                                </tr>

                                <?php  
                                }
                             ?>
                           

                        </table>
                    </div>
                </div>
             <?php include 'dashboad_location/dashboard_footer.php'; ?>