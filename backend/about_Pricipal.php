
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add About Principal.. </h2>

                         <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_principal=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>

                        <form action="about_principal_post.php" method="post" enctype="multipart/form-data">
                            <table class="table">
                                
                                <tr>
                                    <td class="user_info"> Title </td>
                                    <td> <input type="text" name="title" placeholder="Add your title" >
                                     </td>
                                </tr>

                                 <tr>
                                    <td class="user_info"> description</td>
                                    <td> 
                                        <input type="text" name="description" class="form_textarea">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="user_info"> principal_img</td>
                                    <td> <input type="file" name="principal_img" class="form-control" style="margin-left:30px;">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="user_info"> principal_name</td>
                                    <td> <input type="text" name="principal_name" placeholder="Add Principal-name">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="user_info"> principal_designation</td>
                                    <td> <input type="text" name="principal_designation" placeholder="Add Principal-Designation">
                                    </td>
                                </tr>

                                <tr>
                                    <td class="user_info">institute_name</td>
                                    <td> <input type="text" name="institute_name" placeholder="Add Institute Name">
                                    </td>
                                </tr>


                                <tr>

                                    <td colspan="3"> <input type="submit" value="Add-Principal" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                        <h2>View About_Principal</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>Title</th>
                                <th>Descrip</th>
                                <th>img</th>
                                <th>name</th>
                                <th>designation</th>
                                <th>Ins_name</th>
                                <th>action</th>
                            </tr>

                            <?php 

                                $get_p_content = "SELECT * FROM principal_message";

                                $all_p_messages = mysqli_query($db, $get_p_content);

                                foreach ($all_p_messages as $principal_value){
                                    ?>

                                    <tr class="u_data">
                                    
                                    <td>
                                        <?= $principal_value['title']; ?>
                                    </td>
                                    
                                    <td><textarea class="textarea">
                                        <?= $principal_value['description']; ?>
                                    </textarea></td>

                                    <td>
                                        <img src="uploads/principal_img/<?= $principal_value['principal_img']; ?>" width='100'>
                                    </td>

                                    <td>
                                        <?= $principal_value['principal_name']; ?>
                                    </td>

                                    <td>
                                        <?= $principal_value['principal_designation']; ?>
                                    </td>

                                    <td>
                                        <?= $principal_value['institute_name']; ?>
                                    </td>
                                   
                                    <td>
                                        <a href="edit_about_principal.php?id=<?php echo $principal_value['id']; ?>" class='btn btn-primary btn-sm'>Edit</a>||
                                        <a href="delete_principal.php?principal_id=<?php echo $principal_value['id']; ?> & principal_img=<?php echo $principal_value['principal_img']; ?>"  class="btn btn-danger btn-sm" onclick='return confirm("are you sure delete data~..")'>Delete</a>
                                    </td>
                                </tr>
                                    
                                <?php
                                }
                                

                             ?>

                        </table>
                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            