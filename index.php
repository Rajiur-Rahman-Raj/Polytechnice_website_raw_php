<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>polytechnic</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,500,700,800,900|Oxygen:300,400,700" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- nivo slider link start -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto+Slab:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontend/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="fontend/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="fontend/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="fontend/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="fontend/css/nivo-slider.css">
    <!-- nivo slider link finish -->
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
            background: #F49F40;
        }
        #content .welcome a {
            background: #333433;
        }
        #content .department i {
            color: #F39F40;
        }
        #narrow .s-area ul li a i {
        color: #278FB7;
        border: 2px solid #278FB7;
        }
        #narrow .notice .note-slick i {
            padding-right: 5px;
            color: #278FB7;
            transition: all linear 0.2s;
        }
        #content .department i:hover{
            background:#ddd !important;
            transform:scale(1.3,1.3);
            color:#333;

        }
        #narrow .link ul li a i {
            color: #278FB7;
        }
        #narrow .link ul li::before {
            color: #278FB7;
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
        #content .princi .message p a {
            color: #cb0a0a;
        }
        #content .welcome a, .bistarito {
            text-transform: uppercase;
            font-family: 'Alegreya Sans', sans-serif;
            font-size: 16px;
            padding: 8px 20px;
            color: #fff;
            float: right;
            background: #931313;
            border-radius: 4px;
            box-shadow: 4px 3px 4px 0px #747474;
        }
        #content .princi h4 {
            color: #00be89;
            font-family: 'Oxygen', sans-serif;
            font-size: 16px;
            line-height: 20px;
            text-transform: capitalize;
            font-weight: 500;
            margin-top: 55px !important;
            display: block;
        }
        #content h2 {
            font-size: 26px;
            text-transform: uppercase;
            color: #222;
            font-family: 'Alegreya Sans', sans-serif;
            padding-bottom: 20px;
            text-align: center;
            background: #278fb7;
            color: white;
            padding: 10px;
        }
        #gallary img {
            width: 100%;
            margin-top: 33px;
            height: 350px;
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
        <?php include 'fontend/banner.php'; ?>
        <!-- banner ends -->
    </div>
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-12">
                   <!-- about part start -->
                    <?php include 'fontend/about.php'; ?>
                   <!-- about part ends -->


                    <!-- about principal start-->
                    <?php include 'fontend/about_principal.php'; ?>
                    <!-- about principal ends-->

                    <!-- about department start-->
                    <?php include 'fontend/department.php' ?>
                    <!-- about department ends-->

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

    <!-- counter part starts -->
    <?php include 'fontend/status.php'; ?>
    <!-- counter part ends -->

    <!-- blog start -->
    <?php include 'fontend/blog.php'; ?>
    <!-- blog end -->

    <!-- gallary part ends -->
    <?php include 'fontend/our_galary.php'; ?>
    <!-- gallary part ends -->

    <!-- footer top starts -->
    <?php include 'fontend/footer_top.php'; ?>
    <!-- footer top ends -->

    
    <!-- top to -->


    <script src="fontend/js/jquery-1.9.0.min.js"></script>
    <script src="fontend/js/bootstrap.min.js"></script>
    <script src="fontend/js/mixitup.min.js"></script>
    <script src="fontend/js/slick.min.js"></script>
    <script src="fontend/js/custom.js"></script>
    <script src="fontend/js/scroll_to_top.js"></script>
    <script type="text/javascript" src="fontend/js/jquery.nivo.slider.js"></script>

    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>

</html>
