
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add About institute.. </h2>

                        <div>
                           <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_about=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>
                        </div>

                        <form action="About_institute_post.php" method="post">
                            <table class="table">
                                
                                <tr>
                                    <td class="user_info">  Title </td>
                                    <td> <input type="text" name="title" placeholder="Add your title" >
                                     </td>
                                </tr>

                                 <tr>
                                    <td class="user_info"> description</td>
                                    <td> <input type="text" name="description"  class="form_textarea">
                                    </td>
                                </tr>

                                <tr>

                                    <td colspan="3"> <input type="submit" value="Add-about" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        <h2>View About_institute</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>Title</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                require_once 'database/database.php';
                                $get_about = "SELECT * FROM about_table";
                                $get_about_query = mysqli_query($db, $get_about);

                                foreach ($get_about_query as  $about_value) {
                                   ?>


                                <tr class="u_data">
                                    
                                    <td>
                                        <?php echo $about_value['title']; ?>
                                    </td>
                                    
                                    <td><textarea class="textarea">
                                        <?php echo $about_value['description']; ?>
                                    </textarea></td>
                                   
                                    <td>
                                        <a href="edit_about_institute.php?id=<?php echo $about_value['id']; ?>" class='btn btn-primary btn-sm'>Edit</a>||
                                        <a href="delete_about_institute.php?id=<?php echo $about_value['id']; ?>"  class='btn btn-danger btn-sm' onclick='return confirm("are you sure delete data..!")'>Delete</a>
                                    </td>
                                </tr>

                                <?php 
                                }

                             ?>
                        </table>
                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            