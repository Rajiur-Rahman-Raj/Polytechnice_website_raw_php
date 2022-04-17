<section id="foot">
        <div class="container">
            <div class="row">

                <?php

                    require_once 'backend/database/database.php';

                    $select_query = "SELECT * FROM  institute ORDER BY id DESC LIMIT 1";
                    $institute_content = mysqli_query($db, $select_query);
                    $after_assoc_institute = mysqli_fetch_assoc($institute_content);
                ?>

            <div class="col-md-3 col-sm-6 col-6">
                 <img src="backend/uploads/institute_logo/<?= $after_assoc_institute['institute_logo']; ?>" alt="" class="img-fluid" style="width:100px; height:100px; border-radius:50%;"><br>
                <h2 style="color: #d7d7d7; letter-spacing:5px;"><?= $after_assoc_institute['institute_name']; ?></h2>

                <?php 

                    require_once 'backend/database/database.php';

                        $get_social_data = "SELECT * FROM  social_link";

                        $social_query_result = mysqli_query($db,$get_social_data);

                        $after_assoc_social_link = mysqli_fetch_assoc($social_query_result);  
                    ?>

                    <a href="<?= $after_assoc_social_link['facebook']; ?>" target="_blank"><i class="fa fa-facebook-f"></i></a>
                    <a href="<?= $after_assoc_social_link['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="<?= $after_assoc_social_link['googleplus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="<?= $after_assoc_social_link['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>


                </div>
                <div class="col-md-1 offset-1 p-0 col-sm-5 col-5" style="color:white !important">
                    <h5>গুরুত্বপূর্ণ লিংক</h5>

                   <?php 

                    require_once 'backend/database/database.php';
                    $get_useful_links_data = "SELECT * FROM useful_links ORDER BY id DESC";
                    $useful_links_query_result = mysqli_query($db,$get_useful_links_data);
                    $after_assoc = mysqli_fetch_assoc($useful_links_query_result);
                ?>

                <ul style="width:190px; height:190px; overflow: scroll;">
                    <?php 
                        foreach ($useful_links_query_result as $useful_links_value) { 
                     ?>
                        <li><a href="<?= $useful_links_value['description']; ?>" target="_blank"><i class="fa fa-arrow-right"></i><?= $useful_links_value['feature']; ?></a></li>
                    <?php
                    } 
                     ?>
                </ul>
                </div>
                <div class="col-md-2 offset-md-1 col-sm-6 col-6 soci">
                    <h5>যোগাযোগ করতে</h5>
                    <div class="row soc">
                        <div class="col-md-2 col-sm-2 col-1">

                            <ul>
                                <li><i class="fa fa-phone"></i></li>
                                <li><i class="fa fa-envelope"></i></li>
                                <li><i class="fa fa-location-arrow"></i></li>
                            </ul>
                        </div>

                      

                        <div class="col-md-9 col-sm-8 col-8">
                            <ul>
                                <li><a href="tel:+880-1112-333-444" style="color:white !important"><?= $after_assoc_social_link['phone'] ?></a></li>
                                <li><a href="mailto:<?= $after_assoc['email'] ?>" style="color:white !important"><?= $after_assoc_social_link['email'] ?></a></li>
                                <li><a href="#" style="color:white !important"><?= $after_assoc_social_link['address'] ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-1 col-sm-5 col-5">
                    <h5>আমাদের খুজে পেতে</h5>
                    <iframe src="<?= $after_assoc_social_link['location']; ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <footer id="copy">
        <div class="container text-center">
            <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    // echo "Bangladesh Time: ".date("h:i:sa")."<br/>";

            ?>
            <p>Copyright &copy; <?= date("Y"); ?> <?= $after_assoc_institute['institute_name']; ?>.Designed &amp; Developed by <?= $after_assoc_institute['institute_name']; ?></p>
        </div>
    </footer>