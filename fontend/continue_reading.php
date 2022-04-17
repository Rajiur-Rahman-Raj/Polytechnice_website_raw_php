<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>polytechnic</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800,900|Oxygen:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="fontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="fontend/css/slick.css">
    <link rel="stylesheet" href="fontend/css/style.css">
    <link rel="stylesheet" href="fontend/css/responsive.css">
</head>

<body>
    <div id="home">
        <!--  head part starts  -->

        <header id="head">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-7 col-12 logo">
                        <a href="#">
                            <img src="fontend/images/logo.png" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-7 col-sm-5 col-12 text-right">
                        <div class="row ">
                            <div class="co col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li><a href="tel:+880-1112-333-444"><i class="fa fa-phone"></i>+880-1112-333-444</a></li>
                                    <li><a href="mailto:Support@domain.com"><i class="fa fa-envelope"></i>Support@domain.com</a></li>

                                </ul>
                            </div>

                            <div class="so col-md-12 col-sm-12 col-12 text-right">
                                <ul>
                                    <li>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="backend/login.php" target="_blank"><i class="fa fa-sign-in si"></i>sign in</a></li>
                                    <li><a href="backend/registration.php" target="_blank"><i class="fa fa-user-plus si"></i>register</a></li>
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
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#content">about</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    academic
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Teacher &amp; stuff</a>
                                    <a class="dropdown-item" href="#">student info</a>
                                    <a class="dropdown-item" href="#">lab and workshop</a>
                                    <a class="dropdown-item" href="#">events</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">admission info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">department</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">examination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">result</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">gallary</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">contact us</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 mmd-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                            <button class="btn btn-outline-success my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </nav>
            </div>
        </section>
        <!-- menu part end -->

        <!--    marque starts -->
        <?php include 'fontend/latest_news.php'; ?>
        <!--    marque ends -->
        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2> notices</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="notices.php"> notices</a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12 pr-0">
                    <div class="admission">

                        <?php 

                            require_once 'backend/database/database.php';

                            $noitce_id = $_GET['notice_id'];

                            $get_single_notice_data = "SELECT * FROM `notices` WHERE id='$noitce_id'";

                            $notice_query_result = mysqli_query($db,$get_single_notice_data);

                            $after_assoc = mysqli_fetch_assoc($notice_query_result);
                        ?>

                        <h2><?= $after_assoc['title']; ?></h2>
                        <p><i class="fa fa-calendar"><?= $after_assoc['date']; ?></i></p>
                        <p><?= $after_assoc['description']; ?></p>
                        
                    </div>
                </div>
                 <div class="col-md-3 col-sm-12 offset-md-1 p-0 col-12" id="narrow">
                    <div class="row m-0">
                        <!-- about notice start-->
                        <?php include 'fontend/notice.php' ?>
                        <!-- about notice ends-->

                        <!-- about student_area start-->
                        <?php include 'fontend/student_area.php' ?>
                        <!-- about student_area ends-->

                        <!-- about useful_links start-->
                        <?php include 'fontend/useful_links.php' ?>
                        <!-- about usefull_links ends-->
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content part ends -->

    <!-- foot starts -->
    <section id="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-6">
                    <img src="images/logo-small.png" alt="" class="img-fluid">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the best.</p>


                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>

                </div>
                <div class="col-md-1 offset-1 p-0 col-sm-5 col-5">
                    <h5>quick links</h5>
                    <ul>
                        <li><a href="#">admission</a></li>
                        <li><a href="#">results</a></li>
                        <li><a href="#">academics</a></li>
                        <li><a href="#">faculty</a></li>
                        <li><a href="#">news &amp; events</a></li>
                    </ul>
                </div>
                <div class="col-md-2 offset-md-1 col-sm-6 col-6 soci">
                    <h5>contact us</h5>
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
                                <li><a href="tel:+880-1112-333-444">+880-1112-333-444</a></li>
                                <li><a href="mailto:Support@domain.com">Support@domain.com</a></li>
                                <li><a href="#">Dhanmondi, Dhaka, Bangladesh</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 offset-1 col-sm-5 col-5">
                    <h5>find us</h5>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.03694485038!2d90.36710723558421!3d23.747050044430356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2z4Kan4Ka-4Kao4Kau4Kao4KeN4Kah4Ka_LCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1550813533531" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <footer id="copy">
        <div class="container text-center">
            <p>Copyright &copy; 2018 Pathshala Polytechnic Institute.Designed &amp; Developed by Creative IT Institute</p>
        </div>
    </footer>
    <!-- foot ends -->
    <!-- top to -->
    <div>
        <i class="fa fa-angle-up" id="return-to-top"></i>
    </div>


    <script src="fontend/js/jquery-1.12.4.min.js"></script>
    <script src="fontend/js/bootstrap.min.js"></script>
    <script src="fontend/js/mixitup.min.js"></script>
    <script src="fontend/js/slick.min.js"></script>
    <script src="fontend/js/custom.js"></script>
</body>

</html>