
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> Add Course.. </h2>

                        <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "add_department=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> Your Data is Added!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>


                        <form action="department_post.php" method="post">
                            <table class="table">

                                 <tr>
                                    <td class="user_info">Cource name</td>
                                    <td> <input type="text" class="" name="department_name" style="margin-left:30px;"  placeholder="add you department name" >
                                     </td>
                                </tr>

                                <tr>
                                    <td class="user_info">  Font-Awesome </td>
                                    <td> <input type="text" name="fontawesome" placeholder="add you Awesome icon" >
                                     </td><br>
                                    <td><span style="color:red; font-weight: bold">---></span><a href="https://fontawesome.com/icons?d=gallery" target="_blank"> Too see a font-awesome icon list?</a></td>
                                </tr>

                               <tr>
                                    <td class="user_info">point-one</td>
                                    <td><input type="text" name="point_one"  placeholder="add you point_one" ></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">point-two</td>
                                    <td><input type="text" name="point_two"   placeholder="add you point_two" ></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">point-three</td>
                                    <td><input type="text" name="point_three"  placeholder="add you point_three" ></td>
                                 
                                </tr>

                                <tr>

                                    <td colspan="3"> <input type="submit" value="Add-departments" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>

                        <h2>View Departments</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>department</th>
                                <th>fontawsome</th>
                                <th>point-1</th>
                                <th>point-2</th>
                                <th>point-3</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                require_once 'database/database.php';
                                $get_departments = "SELECT * FROM departments";
                                $get_departments_query = mysqli_query($db, $get_departments);

                                foreach ($get_departments_query as  $department_value) {
                                   ?>


                                <tr class="u_data">
                                    
                                    <td>
                                        <?php echo $department_value['department_name']; ?>      
                                    </td>

                                    <td>  
                                        <span><i class="fa fa-<?php echo $department_value['fontawesome']; ?>"></i></span>  
                                    </td>

                                    <td>
                                        <?php echo $department_value['point_one']; ?>
                                            
                                    </td>
                                    

                                    <td>
                                        <?php echo $department_value['point_two']; ?>
                                        
                                    </td>
                                    

                                    <td>
                                        <?php echo $department_value['point_three']; ?>
                                    
                                    </td>
                                    
                                    <td>
                                        <a href="edit_departments.php?id=<?php echo $department_value['id']; ?>" class="btn btn-success btn-sm">Edit </a> ||
                                        <a href="delete_departments.php?id=<?php echo $department_value['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure delete data!..')">Delete</a>
                                    </td>
                                </tr>

                                <?php 
                                }

                             ?>
                        </table>
                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            