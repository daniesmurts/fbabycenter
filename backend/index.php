<?php session_start();

//session_start();
if(isset($_POST['login'])) {

	require_once 'assets/includes/connexion.php';
	
	   // Check if username is empty
	if(empty(trim($_POST["username"]))){
        $errMSG = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $errMSG = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
	}
	

    $username=strip_tags($_POST['username']);
    $password=strip_tags($_POST['password']);

    $username=stripslashes($username);
    $password=stripslashes($password);

    $username=mysqli_real_escape_string($dbc, $_POST['username']);
    $password=mysqli_real_escape_string($dbc, $_POST['password']);



    $result=mysqli_query($dbc, "SELECT * FROM users WHERE username='$username' AND password = '$password' ");
	$row1=mysqli_fetch_array($result);

	if(is_array($row1)) {
        $user = $row1['username'];
		$pass = $row1['password'];
    }
 
   if($username!= $user){
			$errMSG="Username was not correct!.'<br/> Try again, please! ";
			//header("refresh:2 ;index.php");
			
   }
   if($password!= $pass) {
			$errMSG="$username" . ' ' ."Password was not correct!.'<br/> Try again, please! ";
			//header("refresh:5 ;index.php");
		}

	/*  if($username!= $user && $password!= $pass){
		//	$errMSG="Both Username and Password were not correct!.'<br/> Try again, please! ";
		}
		 */	

	if(!isset($errMSG)){
		$_SESSION['id']=$row1['id'];
        $_SESSION['username']=$row1['username'];
        $_SESSION['password']=$row1['password'];

        $successMSG="You are logged in.";
        header("location:home.php");

	}
        
} 


?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>FBaby Centre Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="login/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="login/css/style.css">
</head>

<body>

	<div class="wrapper" style="background-image: url('login/images/bg-registration-form-2.jpg');">
		<div class="inner">
			<form action="#" method="post" enctype="multipart/form-data">
				<h3>Admin login</h3>
				<div class=""><?php if(isset($errMSG)) {?>
					<div class="alert alert-danger alert-dismissable" style="margin-top:10px;">
						<a href="#" class="close" data-dismiss="alert"
							aria-label="close">×</a><strong>Error:</strong><?php echo $errMSG;?>
					</div>
					<?php }else if(isset($successMSG)) { ?>
					<div class="alert alert-success alert-dismissable" style="margin-top:10px;">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
						<strong><?php echo $successMSG; ?></strong>
					</div>
					<?php } ?>
				</div>
				<!-- <div class="form-group">
					<div class="form-wrapper">
						<label for="">First Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Last Name</label>
						<input type="text" class="form-control">
					</div>
				</div> -->
				<div class="form-wrapper">
					<label for="">Username</label>
					<input type="text" class="form-control" type="text" name="username">
				</div>
				<div class="form-wrapper">
					<label for="">Password</label>
					<input type="password" class="form-control" type="password" name="password">
				</div>
				<!-- <div class="form-wrapper">
					<label for="">Confirm Password</label>
					<input type="password" class="form-control">
				</div> -->
				<!-- <div class="checkbox">
					<label>
						<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
						<span class="checkmark"></span>
					</label>
				</div> -->
				<button type="submit" value="log in" name="login">Enter</button>
			</form>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>