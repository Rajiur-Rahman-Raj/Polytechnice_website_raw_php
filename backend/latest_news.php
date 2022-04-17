
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add Latest_News.. </h2>

                       
                        <form action="latest_news_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                                
                                <tr>
                                    <td class="user_info">  L_Image </td>
                                    <td> <input type="file" name="l_img"  >
                                     </td>
                                </tr>


                                <tr>
                                    <td class="user_info">  L_Title </td>
                                    <td> <input type="text" name="title" placeholder="Add your L_title" >
                                     </td>
                                </tr>

                                 <tr>
                                    <td class="user_info">Author Name</td>
                                    <td> <input type="text" class="" name="author_name" style="margin-left:30px;">
                                     </td>
                                </tr>

                                <tr>
                                    <td class="user_info">Date</td>
                                    <td> <input type="date" class="" name="date" style="margin-left:30px;">
                                     </td>
                                </tr>

                               <tr>
                                    <td class="user_info"> description</td>
                                    <td>  <input type="text" name="description" class="form_textarea"></td>
                                 
                                </tr>
                                <tr>

                                    <td colspan="3"> <input type="submit" value="Add-latest_news" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        <h2>View Latest_News</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>Title</th>
                                <th>img</th>
                                <th>Author_name</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                require_once 'database/database.php';
                                $get_newses = "SELECT * FROM latest_news";
                                $get_newses_query = mysqli_query($db, $get_newses);

                                foreach ($get_newses_query as  $newses_value) {
                                   ?>


                                <tr class="u_data">
                                    
                                    <td>
                                        <?php echo $newses_value['title']; ?>
                                    </td>

                                    <td>

                                        <img src="uploads/latest_new_img/<?= $newses_value['img']; ?>" width='100'>
                                        
                                    </td>

                                    <td>
                                        <?php echo $newses_value['author_name']; ?>
                                        
                                    </td>

                                    <td>
                                        <?php echo $newses_value['date']; ?>
                                        
                                    </td>
                                    <td><textarea class="textarea">
                                        <?php echo $newses_value['description']; ?>
                                    </textarea></td>
                                    <td>
                                        <a href="edit_newses.php?id=<?php echo $newses_value['id']; ?>" class="btn btn-success btn-sm">Edit </a>||
                                        <a href="delete_newses.php?id=<?php echo $newses_value['id']; ?> & img_name=<?php echo $newses_value['img']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>

                                <?php 
                                }

                             ?>
                        </table>
                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            