<?php
session_start(); 
        if(!(isset($_SESSION['username']))){
             header("location:index.php");
        }
							 require_once 'assets/includes/connexion.php';
							
								
								
								if(isset($_POST['save']))
								{   
									
									$title = mysqli_real_escape_string($dbc, $_POST['title']);   
									
			                        $cover = $_FILES['cover']['name'];
                                    $cover_tmp_name = $_FILES['cover']['tmp_name'];  
									 
									
									if(empty($title)){
										$errMSG = "Please, Enter Brand name.";
									} 
                                   else if(empty($cover)){
										$errMSG = "Please, select an image.";
									} 
									
									
									// if no error occured, continue ....
									if(!isset($errMSG))
									{    
										 
										
    move_uploaded_file($cover_tmp_name,"assets/posted_images/$cover"); 	 

	$q = "INSERT INTO brands (title, cover) VALUES('$title', '$cover')";
											  
										$r = mysqli_query($dbc,$q);
										
										
										if($r){
											$successMSG = "Data was succesfuly added ...";
											header("refresh:3 ; add_brand.php");
										}
										else
										{
											$errMSG = "Sorry, an error occured! Data was not added...";
										}
										
									}
								}
?>




<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add </title>
	<!-- fonts -->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/6d64fe8c14.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>

<body>
<div class="wrapper">
		<!-- sidebar -->
		<?php include("assets/includes/aside.php"); ?>
		<!-- page content -->
		<div id="content">
			<?php include("assets/includes/navbar.php"); ?>
			<div class="container">
				<!-- header row -->
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<h2 class="cat-heading">Brands</h2>
					</div>
					<div class="col-md-6 col-sm-12">
						<p> <a href="" class="setting_add">Add</a> &nbsp;/ &nbsp;<a href="all_brands.php"
								class="setting_edit">All Brands</a> </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12">
                    <?php
        if(isset($errMSG)){
              ?>
                        <div class="alert alert-danger alert-dismissable" style="margin-top:50px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>Error -</strong> <?php echo $errMSG; ?>
                        </div>
                        <?php
          }
          else if(isset($successMSG)){
            ?>
                        <div class="alert alert-success alert-dismissable" style="margin-top:50px;">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <strong>Success -</strong> <?php echo $successMSG; ?>
                        </div>
                        <?php
          }
    ?>


                        <div class="form-area">
                            <form role="form" action="" method="post" enctype="multipart/form-data">
								<br style="clear:both">
								
								<div class="form-group">
                                    <label for="title"> Brand Name : </label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter Brand name" required>
                                </div>

                                <div class="form-group">
                                    <label for="cover"> Brand Picture: </label>
                                    <input type="file" class="form-control" id=" " name="cover">
                                </div>

                                <button type="submit" id="save" name="save"
                                    class="btn btn-info2 pull-right">Add</button>
                            </form>
                        </div>
                    </div>
				</div>



	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<!-- tether -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
	<!-- bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<!-- jQuery Custom Scroller CDN -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#sidebar").mCustomScrollbar({
				theme: "minimal"
			});

			$('#sidebarCollapse').on('click', function () {
				$('#sidebar, #content').toggleClass('active');
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');
			});
		});
	</script>
</body>

</html>