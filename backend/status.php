
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
    			<div class="content_right clear">
                    <div class="content">
                        <h2> Add Status.. </h2>

                        <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_status=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>


                        <form action="status_post.php" method="post">
                            <table class="table">

                                 <tr>
                                    <td class="user_info">Stat name</td>
                                    <td> <input type="text" class="" name="state_name" style="margin-left:30px;"  placeholder="add you stat name" >
                                     </td>
                                </tr>

                                <tr>
                                    <td class="user_info">  Font-Awesome </td>
                                    <td> <input type="text" name="fontawesome" placeholder="add you Awesome icon" >
                                     </td><br>
                                    <td><span style="color:red; font-weight: bold">---></span><a href="https://fontawesome.com/icons?d=gallery" target="_blank"> Too see a font-awesome icon list?</a></td>
                                </tr>

                               <tr>
                                    <td class="user_info">stat amount</td>
                                    <td><input type="number" name="stat_amount" class="form_textarea"  placeholder="add you stat amount" ></td>
                                 
                                </tr>
                                <tr>

                                    <td colspan="3"> <input type="submit" value="Add-status" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>

                        <h2>View status</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>state_name</th>
                                <th>fontawesome-Icon</th>
                                <th>stat_amount</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                require_once 'database/database.php';
                                $get_stat = "SELECT * FROM status_table";
                                $get_stat_query = mysqli_query($db, $get_stat);

                                foreach ($get_stat_query as  $stat_value) {
                                   ?>


                                <tr class="u_data">
                                    
                                    <td>
                                        <?php echo $stat_value['state_name']; ?>      
                                    </td>

                                    <td>  
                                        <span><i class="fa fa-<?php echo $stat_value['fontawesome']; ?>"></i></span>  
                                    </td>

                                    <td>
                                        <?php echo $stat_value['stat_amount']; ?></td>
                                    <td>
                                        <a href="edit_status.php?id=<?php echo $stat_value['id']; ?>" class="btn btn-success btn-sm">Edit </a>||
                                        <a href="delete_status.php?id=<?php echo $stat_value['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure delete data!..')">Delete</a>
                                    </td>
                                </tr>

                                <?php 
                                }

                             ?>
                        </table>
                    </div>
    			</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
    		