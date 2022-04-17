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

     <style>
        #menu {
            background: #333433 !important;
        }
        .search_hover{
            background:black !important;
        }
        .search_hover:hover{
            background: red !important;
        }
        #narrow h3 {
            background: #333433;
        }
        #content .welcome a {
            background: #333433;
        }
        #content .department i {
            width: 90px;
            height: 90px;
            color: #a73106;
            border: 1px solid #333;
            border-radius: 50%;
            cursor: pointer;
            transition:all .7s ease;
        }
        #content .department i:hover{
            background:#ddd !important;
            transform:scale(1.3,1.3);
            color:#333;

        }
        #counter .count-overlay i{
            transition:all 1s ease;
            cursor:pointer;

        }
        #counter .count-overlay i:hover{
            background:#e2e1e1  !important;
            transform:rotate(360deg);
            color:black;
        }
        #blog .blog-item a:hover {
            color: #d22f17;
        }
        #foot .soci ul li i {
            color: #f0eaea;
        }
        #menu nav ul li a:hover{
            color:#ff5656;
        }
        .contact form button {
            background: #333433;
        }
    </style>
</head>

<body>
    <div id="home">
        <!--  head part starts  -->
        <?php include 'fontend/header_part.php'; ?>
        <!-- menu part end -->

        <!--    marque starts -->
        <?php include 'fontend/latest_news.php'; ?>
        <!--    marque ends -->
        <!--    marque ends -->
        <!--  banner starts  -->
        <section id="about-banner">
            <div class="text-center about-overlay">
                <h2>contact-us</h2>
            </div>
        </section>
        <!-- banner ends -->
        <section id="page-indi">
            <div class="container">
                <a href="index.php"><i class="fa fa-home"></i> home</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="contact.php">contact-us</a>
            </div>
        </section>
    </div>
    <!-- content part starts -->
    <section id="content">
        <div class="container">
            <div class="row m-0">
                <div class="col-md-12 col-sm-12 col-12 pr-md-0">
                    <div class="contact">
                        <div class="row m-0">
                            <div class="col-12 p-0" >
                                <h2 class="text-center" style="    border-bottom: 3px solid #c1bebe;padding-bottom: 7px !important;margin-bottom: 50px;">contact-us</h2>
                            </div>

                            <?php 

                                require_once 'backend/database/database.php';

                                $get_social_data = "SELECT * FROM  social_link";

                                $social_query_result = mysqli_query($db,$get_social_data);

                                $after_assoc = mysqli_fetch_assoc($social_query_result);  
                            ?>

                            <div class="col-md-5 col-12 p-0">
                                
                                <a href="tel:+880-1112-333-444"><i class="fa fa-phone"></i><b>phone:</b><?= $after_assoc['phone'] ?></a>
                                <a href="mailto:<?= $after_assoc['email'] ?>"><i class="fa fa-envelope"></i><b>e-mail:</b> <?= $after_assoc['email'] ?></a>
                                <a href="#"><i class="fa fa-location-arrow"></i><b>address:</b><?= $after_assoc['address'] ?></a>
                            </div>

                            <div class="col-md-6 col-12 offset-md-1 p-0">
                                <h5 style="color: #00BE89;margin-bottom: 25px;">গুগল মাপে আমাদের খুঁজে পেতে এখানে ক্লিক করুন</h5>
                                <iframe src="<?= $after_assoc['location'] ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <div class="col-md-12 p-0">
                                <h2 class="h">send us a message</h2>
                                <h5>
                                    <?php 
                                        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                        if(strpos($fullurl, "add_message=success")==true){?>
                                        <div class="alert alert-info alert-sm bg-success text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
                                          <strong>Good!..</strong> Your Message is successfully sent...
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <?php     
                                        }
                                    ?>
                                </h5>
                            </div>
                            
                             
                            <div class="col-12 ">
                               <form action="backend/contact_post.php" method="post">
                                <div class="row m-0">
                                   
                                <div class="col-6 p-0">
                                    <input class="name" type="text" placeholder="your name" name="user_name">
                                </div>
                                <div class="col-6 p-0">
                                    <input type="mail" placeholder="your E-mail" name="user_email">
                                </div>
                                <div class="col-12 p-0">
                                    <input type="text" placeholder="subject" name="user_subject">
                                </div>
                                <div class="col-12 p-0">
                                    <textarea name="user_msg" id="" cols="30" rows="10" placeholder="message"></textarea>
                                    <button type="submit" style="cursor:pointer">send</button>
                                </div> 
                                </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- content part ends -->

    <!-- foot starts -->
    <?php include 'fontend/footer_top.php'; ?>
    <!-- foot ends -->
    <!-- top to -->
    


    <script src="fontend/js/jquery-1.12.4.min.js"></script>
    <script src="fontend/js/bootstrap.min.js"></script>
    <script src="fontend/js/mixitup.min.js"></script>
    <script src="fontend/js/slick.min.js"></script>
    <script src="fontend/js/custom.js"></script>
    <script src="fontend/js/scroll_to_top.js"></script>

</body>

</html>