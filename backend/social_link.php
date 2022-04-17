
<?php  include 'dashboad_location/dashboard_header.php';
require_once 'database/database.php';
 ?>
                <div class="content_right clear">
                    <div class="content">
                        <h2> add social link.. </h2>

                        <?php 
                                $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                if(strpos($fullurl, "social_link=success")==true){?>
                                <div class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                  <strong>Good!..</strong> social link  is updated!~~
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <?php     
                                }
                            ?>

                        <?php 

                            require_once 'database/database.php';

                            $get_social_data = "SELECT * FROM  social_link";

                            $social_query_result = mysqli_query($db,$get_social_data);

                            $after_assoc = mysqli_fetch_assoc($social_query_result); 
                        ?>

                        <form action="social_link_post.php" method="post">
                            <table class="table">

                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?= $after_assoc['id']; ?>"></td>
                                </tr>
                                
                                <tr>
                                    <td class="user_info">phone</td>
                                    <td> <input type="number" name="phone" value="<?= $after_assoc['phone']; ?>" >
                                     </td>
                                </tr>

                                 <tr>
                                    <td class="user_info">email</td>
                                    <td> <input type="email" class="" name="email" value="<?= $after_assoc['email']; ?>" style="margin-left:30px;">
                                     </td>
                                </tr>
                               <tr>
                                    <td class="user_info">address</td>
                                    <td>  <input type="text" name="address" value="<?= $after_assoc['address']; ?>"></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">location</td>
                                    <td>  <input type="text" name="location" value="<?= $after_assoc['location']; ?>"></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">facebook</td>
                                    <td>  <input type="text" name="facebook" value="<?= $after_assoc['facebook']; ?>"></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">twitter</td>
                                    <td>  <input type="text" name="twitter" value="<?= $after_assoc['twitter']; ?>"></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">googleplus</td>
                                    <td>  <input type="text" name="googleplus" value="<?= $after_assoc['googleplus']; ?>"></td>
                                 
                                </tr>

                                <tr>
                                    <td class="user_info">instagram</td>
                                    <td>  <input type="text" name="instagram" value="<?= $after_assoc['instagram']; ?>"></td>
                                 
                                </tr>

                                <tr>

                                    <td colspan="3"> <input type="submit" value="update_social_link" style="margin-left: 117px;">
                                     </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
 <?php include 'dashboad_location/dashboard_footer.php'; ?>
            