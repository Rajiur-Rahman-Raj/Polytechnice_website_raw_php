
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add quick_links.. </h2>

                        <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_quick_link=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>

                        <?php 
                            require_once 'database/database.php';
                            $select_query = "SELECT * FROM quick_links WHERE id=1";
                            $get_links_data = mysqli_query($db, $select_query);

                            $after_assoc = mysqli_fetch_assoc($get_links_data);

                         ?>

                        <form action="quick_link_post.php?id=<?= $after_assoc['id']; ?>" method="post">
                            <table class="table">

                               <tr>
                                    <td class="user_info">point-one</td>
                                    <td><input type="text" name="point_one" value="<?= $after_assoc['point_one']; ?>" ></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">point-two</td>
                                    <td><input type="text" name="point_two"   value="<?= $after_assoc['point_two']; ?>" ></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">point-three</td>
                                    <td><input type="text" name="point_three"   value="<?= $after_assoc['point_three']; ?>" ></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">point-four</td>
                                    <td><input type="text" name="point_four" value="<?= $after_assoc['point_four']; ?>" ></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">point-five</td>
                                    <td><input type="text" name="point_five"  value="<?= $after_assoc['point_five']; ?>" ></td>
                                 
                                </tr>


                                <tr>

                                    <td colspan="3"> <input type="submit" value="update_quick_links" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            