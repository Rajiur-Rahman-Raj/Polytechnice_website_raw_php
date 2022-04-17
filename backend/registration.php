
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login_reg.css">
<!--===============================================================================================-->
</head>

<style type="text/css">
	.eye_icon {
	    position: absolute;
	    left: 89%;
	    top: 6%;
	    font-size: 25px;
	    cursor:pointer;
	}
</style>
<body>

	<!-- write php code for registration  -->
	<?php 

	    if ($_SERVER["REQUEST_METHOD"]=="POST") {

	    	$name     = $_POST['name'];
	    	$email    = $_POST['email'];
	    	$pass     = $_POST['password'];
	    	$password = md5($_POST['password']);
	    	$role     = $_POST['role'];

	    	require_once 'database/database.php';

	    	$check = "SELECT count(*) as email_address FROM my_reg_table WHERE email='$email'";
	    	$result = mysqli_query($db,$check);

	    	$final = mysqli_fetch_assoc($result);

	    	// chekcing name
	    	if(preg_match("/^([a-zA-Z' ]+)$/",$name)){
				// $errname = '<span style="color:green; margin-left:7px;"><i class="fa fa-check"></i><span>';
				//checking email
				if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email)){ 
					$erremail = '<span style="color:red; margin-left:7px;"><i class="fa fa-times"></i><span>'." <span style='color:green'> Invalid Email Address!<span>";

				}else{	
						// $erremail = '<span style="color:green; margin-left:7px;"><i class="fa fa-check"></i><span>';
						//checking password
					    if (strlen($pass) <= '8') {
							$errpassword = '<span style="color:red; margin-left:7px;"><i class="fa fa-times"></i><span>'." <span style='color:green'>Your Password Must Contain At Least 8 Characters!<span>";
						}
			        	elseif(!preg_match("#[0-9]+#",$pass)) {
			            	$errpassword ='<span style="color:red; margin-left:7px;"><i class="fa fa-times"></i><span>'." <span style='color:green'>Your Password Must Contain At Least 1 Number!<span>";
			        	}
				        elseif(!preg_match("#[A-Z]+#",$pass)) {
				            $errpassword ='<span style="color:red; margin-left:7px;"><i class="fa fa-times"></i><span>'." <span style='color:green'>Your Password Must Contain At Least 1 Capital Letter!<span>";
				        }
				        elseif(!preg_match("#[a-z]+#",$pass)) {
				            $errpassword ='<span style="color:red; margin-left:7px;"><i class="fa fa-times"></i><span>'." <span style='color:green'>Your Password Must Contain At Least 1 Lowercase Letter!<span>";
				        }else{
			            	// $errpassword ='<span style="color:green; margin-left:7px;"><i class="fa fa-check"></i><span>';

			            	if ($final['email_address']== 0) {
								$insert = "INSERT INTO my_reg_table(name,email,password,role) VALUES('$name','$email','$password', $role)";
							if(mysqli_query($db,$insert)){
								$res_successfull =  '<div style="margin-top:20px;" class="alert alert-danger bg-info text-white alert-dismissible fade show" role="alert" style="margin:0px 15px;">
					                <strong>Good!.. </strong> Your Registration is Successfull!
					                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					                    <span aria-hidden="true">&times;</span>
					                  </button>
					                </div>';
							}

						}
						else{
							   $user_eamil =  "<span style='color:red;'>this email already used</span>";
							}
			        	}

					}
				
				}else{
	   				 	$errname = '<span style="color:red; margin-left:7px;"><i class="fas fa-times"></i><span>'." <span style='color:green'> name is Required <span>";
				}	
  			}
	?>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/bg-01.jpg);">
					<span class="login100-form-title-1">
						SIGIN UP
					</span>
				</div>
				<div style="margin:40px 40px 0px 40px;">
				<?php global $res_successfull; echo $res_successfull; ?>
				</div>
				<form class="login100-form validate-form" action="registration.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
						<span class="label-input100">Name<span style="color:red">*</span></span>
						<input class="input100" type="text" name="name" placeholder="Enter Your Name">
						<span class="focus-input100"></span><span><?php global $errname; echo $errname; ?></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Your Email is required">
						<span class="label-input100">Email<span style="color:red">*</span></span>
						<input class="input100" type="text" name="email" placeholder="Enter Your Email">
						<span class="focus-input100"></span>
						<span>
							<?php global $user_eamil; echo $user_eamil; ?>
							<?php global $erremail; echo $erremail; ?>		
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password<span style="color:red">*</span></span>
						<input class="input100" type="password" name="password" id="pass" placeholder="Enter Your password"><span class="eye_icon" id="eye" style=''><i class="fa fa-eye" ></i></span>
						<span class="focus-input100"></span>
						<span><?php global $errpassword; echo $errpassword; ?></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Role<span style="color:red">*</span></span>
						<select class="form-control" name="role">
							<option value="">--Select One--</option>
							<option value="1">Admin</option>
							<option value="2">Student</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href='login.php' class="txt1">
								I have a already Member? <span type="button" class="btn btn-primary btn-sm" >Sign-in</span>
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Sign-Up
						</button>
					</div>

				</form>

			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="js/javascript.js"></script>
	<script src="js/main.js"></script>



</body>
</html>


