
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
    			<div class="content_right clear">
                    <div class="content">
                        <h2> Add Notice.. </h2>

                        <?php 

                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                $title = $_POST['title'];
                                $date = $_POST['date'];
                                $description = $_POST['decription'];
                                
                                $add_notice = "INSERT INTO notices(title, date, description) VALUES('$title','$date','$description')";
                                if(mysqli_query($db,$add_notice)){
                                ?>
                                 <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                              <strong>HA..HA..HA</strong> Your notice add successfully~~
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                        </div>
                                <?php
                                }else{
                                    echo "no ";
                                }
                            }
                        ?>

                        <form action="about_notice.php" method="post">
                            <table class="table">
                                
                                <tr>
                                    <td class="user_info">  Title </td>
                                    <td> <input type="text" name="title" placeholder="Add your title" >
                                     </td>
                                </tr>

                                 <tr>
                                    <td class="user_info">  Date</td>
                                    <td> <input type="date" class="" name="date" style="margin-left:30px;">
                                     </td>
                                </tr>
                               <tr>
                                    <td class="user_info"> description</td>
                                    <td>  <input type="text" name="decription" class="form_textarea"></td>
                                 
                                </tr>
                                <tr>

                                    <td colspan="3"> <input type="submit" value="Add-notices" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        <h2>View Notices</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>Title</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                require_once 'database/database.php';
                                $get_notice = "SELECT * FROM notices";
                                $get_notice_query = mysqli_query($db, $get_notice);

                                foreach ($get_notice_query as  $notice_value) {
                                   ?>


                                <tr class="u_data">
                                    
                                    <td><textarea class="textarea">
                                        <?php echo $notice_value['title']; ?>
                                    </textarea></td>
                                    <td><?php echo $notice_value['date']; ?></td>
                                    <td><textarea class="textarea">
                                        <?php echo $notice_value['description']; ?>
                                    </textarea></td>
                                    <td>
                                        <a href="edit_notice.php?id=<?php echo $notice_value['id']; ?>" class="btn btn-success btn-sm">Edit </a>||
                                        <a href="delete_notice.php?id=<?php echo $notice_value['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>

                                <?php 
                                }

                             ?>
                        </table>
                    </div>
    			</div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
    		