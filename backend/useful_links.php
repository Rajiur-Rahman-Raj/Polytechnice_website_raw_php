
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add Important links.. </h2>

                        <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_links=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>

                        <form action="useful_link_post.php" method="post">
                            <table class="table">

                                 <tr>
                                    <td class="user_info"> Title </td>
                                    <td> <input type="text" class="" name="feature" placeholder="add feature name" style="margin-left:30px;">
                                     </td>
                                </tr>
                               <tr>
                                    <td class="user_info">Add Link</td>
                                    <td>  <input type="text" name="decription" placeholder="add link" class="form_textarea"></td>
                                 
                                </tr>
                                <tr>

                                    <td colspan="3"> <input type="submit" value="Add-important_link" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        <h2>View Useful Links</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>Title</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                require_once 'database/database.php';
                                $get_useful_links = "SELECT * FROM useful_links";
                                $get_useful_links_query = mysqli_query($db, $get_useful_links);

                                foreach ($get_useful_links_query as  $useful_links_value) {
                                   ?>


                                <tr class="u_data">
                                    
                                    
                                    <td><?php echo $useful_links_value['feature']; ?></td>
                                    <td><textarea class="textarea">
                                        <?php echo $useful_links_value['description']; ?>
                                    </textarea></td>
                                    <td>
                                        <a href="edit_useful_links.php?id=<?php echo $useful_links_value['id']; ?>" class="btn btn-success btn-sm">Edit </a>||
                                        <a href="delete_useful_links.php?id=<?php echo $useful_links_value['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure delete data~..')">Delete</a>
                                    </td>
                                </tr>

                                <?php 
                                }

                             ?>
                        </table>
                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            