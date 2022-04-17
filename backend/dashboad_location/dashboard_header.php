<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- fontawsome css link  -->
        <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <!-- fontawsome js link -->
        <script type="text/javascript" src="js/fontawesome.min.js"></script>
        <script type="text/javascript" src="js/all.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="css/normalize.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>        
        <link rel="stylesheet" href="css/main.css">
    </head>

    <style type="text/css">
        

        .header_section {
                margin:0px; 
               padding: 10px 22px 0px 22px;
            }

        .tamplate{
            margin:10px auto;
            border:5px solid #0A5258;
            background: white;
            width:95%;
        }
        .content_left h2 {
            padding: 0px 10px;
            margin-top: 2px;
            margin-bottom: 5px;
        }
        .content_left ul li a{
            transition:all .7s ease;
        }
        .content_left ul li a:hover{
            background:red;
        }
        .content_section{
            margin:0px;
        }
        .footer_section {
            margin: 0px;
            background: #1E6E75;
            padding: 0px 0px;
        }
        .update_table {
                margin: 15px 15px;
                border: 1px solid #5a5a5a;
                width: 96%;
                text-align: center;
            }
            .update_table tr,th{}
            .u_head {
                background: #353434;
                color: white;
            }
            .u_data {
                background: #ecdecd;
                color: black;
            }
            .update_table tr, th {
                padding: 7px 0px;
                border: 1px solid white;
                box-shadow: 3px 3px 3px 0px #0f0f10;
                
            }
            .update_table tr, td {
                padding: 7px 0px;
                border: 1px solid #515151;
                box-shadow: 3px 3px 3px 0px #a4a4a4;
            }
            .main_menu ul li a{
                padding: 8px 54px;
            }
            .content h2{
                font-size:25px;
            }
            .content_left h2{
                font-size: 25px;
                font-family: aria;
            }
            .table td, .table th {
                padding:0px;
                vertical-align:middle;
                border-top: 0px solid #dee2e6;
            }
            .table{
                border:none;
                border-left: 2px solid #a9a4a4;
                padding:10px;
            }
            .footer p{
                margin-top:15px;
            }
            .textarea {
            border: 2px solid #0B7983;
            width: 150px;
            height: 60px;
            background:#333;
            color: white;
        padding: 5px 10px
            }
        .form_textarea{
            border: none;
            width: 350px;
            height: 75px;
            background: #4b4b4b;
            color: white;
            padding: 5px 10px;
            margin-left:30px;
        }
        table{
            margin: 0 auto;
        }
        input[type="text"], input[type="email"], input[type="password"],input[type="date"],input[type="number"]{
                width: 350px;
            padding: 8px 10px;
            margin: 8px 30px;
            border-radius: 5px;
            background: #f4f3f3;
            border: 1px solid #e1e1e1;
            color: #959595;
        }
        .main_menu ul li a{
            padding: 9px 82px !important;
        }
        input[type="submit"] {
            margin-left: 123px;
            background: #46979B;
            padding: 7px 15px;
            border: 1px solid #0a7b87;
            color: white;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
    <body>
      
    	<div class="tamplate clear">
    		<section class="header_section clear">
    			<header class="header clear">
    				<h2> Your Dashboard </h2>
    				<nav class="main_menu clear">
    					<ul>
                            <li><a href="dashboard.php">Home</a></li>
    						<li><a href="../index.php" target="_blank">Visit-Website</a></li>
    						<li><a href="user_update.php">Edit-Profile</a></li>
    						<li><a href="change_password.php">Change Password</a></li>
    						<li><a href="logout.php">Logout</a></li>
    					</ul>
    				</nav>
    			</header>
    		</section>

    		<section class="content_section clear">
    			<div class="content_left clear" id="myactivediv">
    				<aside>
    					
                        <h2> হেডার অপশন </h2>
                        <ul>
                            <li ><a href="header.php">চেন্জ ইনস্টিটিউট নাম/লোগো</a></li>
                        </ul>

    					<h2> স্লাইডার/এবাউট অপশন </h2>
    					<ul>
    						
    						<li><a href="banner.php">এড ওয়েবসাইট স্লাইাডার</a></li>
                            <li><a href="about_institute.php">ইনস্টিটিউট সম্পর্কে লেখা</a></li>
                            <li><a href="about_Pricipal.php">অধ্যক্ষ  মেসেজ</a></li>
                            <li><a href="about_notice.php">এড সাম্প্রতিক পোস্ট</a></li>
                            <li><a href="student_info.php">এড সু্যোগ - সুবিধা</a></li>
                             <li><a href="useful_links.php">এড গুরুত্বপূর্ণ লিংকস </a></li>
    					</ul>

    					<h2> কোর্স অপশন </h2>
    					<ul>
                            <li><a href="our_departments.php">আমাদের বিভাগসমুহ</a></li>
                            <li><a href="status.php"> এড স্ট্যাটাস </a></li>
                        </ul>

                        <h2>  ব্লগ নিউজ/গেলারাী </h2>
                        <ul>
                            <li><a href="latest_news.php"> এড নতুন খোবর এবং আপডেট </a></li>
                            <li><a href="our_galary.php"> এড গেলারাী </a></li>
                        </ul>

                         <h2>যোগাযোগ</h2>
                        <ul>
                            <li><a href="contact_us.php"> ভিউ যোগাযোগ মেসেজ  </a></li>
                        </ul>


                        <h2> সোসিয়াল অপশন </h2>
                        <ul>
                            <li><a href="social_link.php"> সোসিয়াল লিংকসমুহ </a></li>
                        </ul>
                         
    				</aside>
    			</div>
