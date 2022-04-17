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

                            $student_id = $_GET['student_id'];

                            $get_single_student_data = "SELECT * FROM `student_info` WHERE id='$student_id'";

                            $student_query_result = mysqli_query($db,$get_single_student_data);

                            $after_assoc = mysqli_fetch_assoc($student_query_result);
                        ?>

                        <h2><?= $after_assoc['feature']; ?></h2>
                        
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