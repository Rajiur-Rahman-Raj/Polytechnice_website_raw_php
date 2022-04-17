 <div class="row">
                        <div class="welcome col-sm-12">
                        	<?php 
                        		require_once 'backend/database/database.php';

                        		$select_query = "SELECT * FROM about_table ORDER BY id DESC LIMIT 1";
                        		$about_institute_content = mysqli_query($db, $select_query);
                        		$after_assoc = mysqli_fetch_assoc($about_institute_content);
                        	 ?>
                            <h2><?php echo $after_assoc['title'] ?></h2>
                            <p style="height:200px; overflow:hidden; padding-bottom:20px;"><?php echo $after_assoc['description'] ?></p>
                            <a href="about_institute_read_more.php" style="margin-top:15px;">বিস্তারিত</a>
                        </div>
                        <!-- welcome ends -->
                    </div>