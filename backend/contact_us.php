
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">

                        
                        <h2>Contact Message</h2>
                        <table class='update_table'>   
                            <tr class="u_head">
                                <th>user_name</th>
                                <th>user_email</th>
                                <th>user_subject</th>
                                <th>user_msg</th>
                                <th>read_status</th>
                                <th>action</th>
                            </tr>

                            <?php 
                                require_once 'database/database.php';
                                $get_msg = "SELECT * FROM contact_msg";
                                $get_msg_query = mysqli_query($db, $get_msg);

                                foreach ($get_msg_query as  $msg_value) {
                                   ?>


                                <tr class="u_data <?= ($msg_value['read_msg']==1)?'bg-secondary text-white': '' ?>">
                                    
                                    <td>
                                        <?php echo $msg_value['user_name']; ?>  
                                    </td>

                                    <td>
                                        <?php echo $msg_value['user_email']; ?>
                                    </td>

                                    <td>
                                        <?php echo $msg_value['user_subject']; ?>
                                    </td>

                                    <td><textarea class="textarea">
                                        <?php echo $msg_value['user_msg']; ?>
                                    </textarea></td>

                                    <td>
                                       <?php 

                                            if($msg_value['read_msg']==1){
                                            ?>

                                            <a href="readmsg.php?id=<?php echo $msg_value['id']; ?>" class="btn btn-success btn-sm">Unread_Message</a>  
                                        <?php 
                                        }

                                         ?>
                    
                                    </td>

                                    <td>
                                        <a href="delete_msg.php?id=<?php echo $msg_value['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('are you sure delete message..')">Delete</a>
                                    </td>
                                </tr>

                                <?php 
                                }

                             ?>
                        </table>
                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            