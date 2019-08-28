<?php session_start(); ob_start();
if(isset($_POST['login'])){
    require_once '../connexion.php';
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    
    $username = stripslashes($username);
    $password = stripslashes($password);
    
    $username = mysqli_real_escape_string($dbc, $_POST['username']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);
    
    
    
    $result = mysqli_query($dbc,"SELECT * FROM users WHERE username='$username' AND password = '$password' ");
    $row1  = mysqli_fetch_array($result);
    
    if(is_array($row1)) {
    $_SESSION['user_id'] = $row1['id'];
    $_SESSION['username'] = $row1['username'];
    $_SESSION['password'] = $row1['t_password'];
	$_SESSION['cover'] = $row1['cover']; 
    
    $successMSG = "Success.";  
		  header("location:../index.php");
    } else {
        $errMSG = "Sorry, Username or Password incorrect!.'<br/> Please, try again! ";
       header("refresh:1 ;index.php");
     }
}

ob_end_flush();
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fbaby Center</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
<<<<<<< HEAD
				<form method="post" action="" class="login100-form validate-form">
=======
				<form class="login100-form validate-form">
				<span class="login100-form-title p-b-23">
						FbabyCentre Back Office
					</span>
>>>>>>> 7dfb5bf2b0e0480d1969a8c5d3de4ccc62773f99
					<span class="login100-form-title p-b-43">
						Login to continue
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Username</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="">
				  <?php
								if(isset($errMSG)){
											?>
										 <div class="alert alert-danger alert-dismissable" style="margin-top:10px;">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
											<strong>Error -</strong> <?php echo $errMSG; ?>
										 </div>
											<?php
									}
									else if(isset($successMSG)){
										?>
										<div class="alert alert-success alert-dismissable" style="margin-top:10px;">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
											<strong><?php echo $successMSG; ?></strong> 
										 </div>
										<?php
									}
					?> 
				</div>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
				</div>
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
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>