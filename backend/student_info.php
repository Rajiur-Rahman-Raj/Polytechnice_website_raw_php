
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add Student info.. </h2>

                         <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_student_info=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>

                        <form action="student_info_post.php" method="post">
                            <table class="table">
                                

                                 <tr>
                                    <td class="user_info"> feature </td>
                                    <td> <input type="text" class="" name="feature" placeholder="add feature name" style="margin-left:30px;">
                                     </td>
                                </tr>
                               <tr>
                                    <td class="user_info"> description</td>
                                    <td>  <input type="text" name="decription" placeholder="add description" class="form_textarea"></td>
                                 
                                </tr>
                                <tr>

                                    <td colspan="3"> <input type="submit" value="Add-stu_info" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        <h2>View Student info</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>Feature</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                require_once 'database/database.php';
                                $get_stu_info = "SELECT * FROM student_info";
                                $get_stu_info_query = mysqli_query($db, $get_stu_info);

                                foreach ($get_stu_info_query as  $stu_info_value) {
                                   ?>


                                <tr class="u_data">
                                    
                                    <td><?php echo $stu_info_value['feature']; ?></td>
                                    <td><textarea class="textarea">
                                        <?php echo $stu_info_value['description']; ?>
                                    </textarea></td>
                                    <td>
                                        <a href="edit_student_info.php?id=<?php echo $stu_info_value['id']; ?>" class="btn btn-success btn-sm">Edit </a>||
                                        <a href="delete_student_info.php?id=<?php echo $stu_info_value['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure delete data~..')">Delete</a>
                                    </td>
                                </tr>

                                <?php 
                                }

                             ?>
                        </table>
                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            