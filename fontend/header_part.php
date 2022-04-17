    <!-- notice code  -->
    <?php 

        require_once 'backend/database/database.php';

        $get_notices_data = "SELECT * FROM `notices` order by id DESC";

        $notice_query_result = mysqli_query($db,$get_notices_data);

        $after_fetch_assoc = mysqli_fetch_assoc($notice_query_result);
        ?>

        <header id="head">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-12 logo">

                       <?php 
                            require_once 'backend/database/database.php';

                            $select_query = "SELECT * FROM  institute ORDER BY id DESC LIMIT 1";
                            $institute_content = mysqli_query($db, $select_query);
                            $after_assoc = mysqli_fetch_assoc($institute_content);
                        ?>

                        <a href="#">
                            <img src="backend/uploads/institute_logo/<?= $after_assoc['institute_logo']; ?>" alt="" class="img-fluid" style=" float:left; height: 135px;width: 135px;margin-right: 20px;">
                            
                        </a>
                        <h2 style="margin-top: 46px;padding-left: 15px;color:#F39F40;font-size: 25px; font-family: 'Montserrat', sans-serif; font-weight:bold"><?= $after_assoc['institute_name']; ?></h2>
                    </div>



                    <?php 

                        require_once 'backend/database/database.php';

                        $get_social_data = "SELECT * FROM  social_link";

                        $social_query_result = mysqli_query($db,$get_social_data);

                        $after_assoc = mysqli_fetch_assoc($social_query_result);  
                    ?>


                    <div class="col-md-5 col-sm-5 col-12 text-right" style="margin-top: 25px;">
                        <div class="row ">
                            <div class="co col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li><a href="tel:+880-1112-333-444"><i class="fa fa-phone" style="    color: #F39F40;"></i><?= $after_assoc['phone']; ?></a></li>
                                    <li><a href="mailto:<?= $after_assoc['email']; ?>"><i class="fa fa-envelope" style="    color: #F39F40;"></i><?= $after_assoc['email']; ?></a></li>

                                </ul>
                            </div>

                            <div class="so col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li>
                                        <ul class="social">
                                            <li><a href="<?= $after_assoc['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="<?= $after_assoc['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="<?= $after_assoc['googleplus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="<?= $after_assoc['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="backend/login.php" target="_blank"><i class="fa fa-sign-in si" style="    color: #F39F40;"></i>sign in</a></li>
                                    <li><a href="backend/registration.php" target="_blank"><i class="fa fa-user-plus si" style="    color: #F39F40;"></i>register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!--  head part ends  -->
        <!-- menu part start -->
        <section id="menu">
            <div class="container text-center">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse p-0" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">প্রথম পাতা<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_institute_read_more.php">আমাদের সম্পর্কে</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="notices.php?notice_id=<?= $after_fetch_assoc['id']; ?>"  >
                                    নোটিশ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about_principal_read_more.php">প্রিন্সিপাল থেকে বার্তা</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="departments.php">বিভাগসমূহ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="new_news_update.php">খবর এবং আপডেট</a>
                            </li>
                            

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    গ্যালারী
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="institute_photo_gallery.php">ফটোগ্যালারী</a>
                                    <a class="dropdown-item" href="#">ভিডিও গ্যালারী</a>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">যোগাযোগ</a>
                            </li>
                        </ul>
                        
                            <input type="text" name="" placeholder="search Here" class="form-control">
                            <button type="submit" class="btn btn-dark search_hover">Search</button>

                    </div>
                </nav>
            </div>
        </section>