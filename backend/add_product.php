<?php
session_start(); 
        if(!(isset($_SESSION['username']))){
             header("location:index.php");
        }
							 require_once 'assets/includes/connexion.php';
							
							
if(isset($_POST['save']))
								{    
									$categ_id = mysqli_real_escape_string($dbc, $_POST['categ_id']);
									$title = mysqli_real_escape_string($dbc, $_POST['title']);  
									$price = mysqli_real_escape_string($dbc, $_POST['price']); 
									$descpt = mysqli_real_escape_string($dbc, $_POST['descpt']); 
									$color = mysqli_real_escape_string($dbc, $_POST['color']);  
									$size = mysqli_real_escape_string($dbc, $_POST['size']); 
									$quantity = mysqli_real_escape_string($dbc, $_POST['quantity']);
									$available = mysqli_real_escape_string($dbc, $_POST['available']); 
									$discount = mysqli_real_escape_string($dbc, $_POST['discount']); 
									$new = mysqli_real_escape_string($dbc, $_POST['new']); 
								
									
									
									if(empty($categ_id)){
										$errMSG = "Please, select a category!";
									} 

								   if(empty($title)){
										$errMSG = "Please, enter product name!";
									}  
									else if(empty($descpt)){
										$errMSG = "Please, describe the product!";
									}
									else if(empty($price)){
										$errMSG = "Please, enter product price!";
									}
									else if(empty($color)){
										$errMSG = "Please, enter product color!";
									}
									else if(empty($size)){
										$errMSG = "Please, enter product size!";
									}
									else if(empty($quantity)){
										$errMSG = "Please, enter product quantity!";
									}
									else if(empty($available)){
										$errMSG = "Please, enter the number of available product in stock!";
									}
									else if(empty($discount)){
										$errMSG = "Please, confirm if the product is on discount!";
									}
									else if(empty($new)){
										$errMSG = "Please, confirm if product is new or not!";
									}
									
									
									
									  
									
									// if no error occured, continue ....
									if(!isset($errMSG))
									{   
				 include("assets/includes/upload_check.php"); 
				 include("assets/includes/upload_check_2.php");
				 include("assets/includes/upload_check_3.php");
										
				$q = "INSERT INTO products ( categ_id, title, price, descpt, color, size, quantity, available, discount, new, cover, cover2, cover3) VALUES( '$categ_id', '$title', '$price', '$descpt', '$color', '$size', '$quantity', '$available', '$discount', '$new', '$cover', '$cover3', '$cover3')";
											  
										$r = mysqli_query($dbc,$q);
										
										
										if($r){
											$successMSG = "Data was succesfuly added ...";
											header("refresh:3 ; add_product.php");
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
	<div class="wrapepr">
		<!-- sidebar -->
		<?php include("assets/includes/aside.php"); ?>
		<!-- page content -->
		<div id="content">
			<?php include("assets/includes/navbar.php"); ?>
			<div class="container">
				<!-- header row -->
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<h2 class="cat-heading">Add Product</h2>
					</div>
					<div class="col-md-6 col-sm-12">
						<p> <a href="" class="setting_add">Add</a> &nbsp;/ &nbsp;<a href="products.php"
								class="setting_edit">All
								Products from this category</a> </p>
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
									<label for="categ_title"> Choose a category: </label>

									<?php 
                   
                  require_once 'assets/includes/connexion.php';
                  $q = "SELECT * FROM categories ORDER BY  title ASC";        
                  $r = mysqli_query($dbc,$q);
                   ?>
									<select class="form-control" name="categ_id" id="">
										<option value="0">Select category.</option>
										<?php while ($data = mysqli_fetch_array($r)){
                  $categ_id = $data['id'];
                  $categ_title = $data['title']; 
                  ?>
										<option value="<?php echo $categ_id;?>"> <?php echo $categ_title; ?> </option>
										<?php } ?>

									</select>
								</div>
								<div class="form-group">
									<label for="title"> Product Name : </label>
									<input type="text" class="form-control" id="title" name="title"
										value="<?php echo $title; ?>" required>
								</div>

								<div class="form-group">
									<label for="title"> Product Price : </label>
									<input type="text" class="form-control" id="title" name="price"
										placeholder="Enter product name" value="<?php echo $price; ?>" required>
								</div>

								<div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="cover"> Image 1: </label>
                                        <input type="file" class="form-control" id=" " name="cover"
                                            value="<?php echo $cover; ?>">
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="cover"> Image 2: </label>
                                        <input type="file" class="form-control" id=" " name="cover2"
                                            value="<?php echo $cover; ?>">
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="cover"> Image 3: </label>
                                        <input type="file" class="form-control" id=" " name="cover3"
                                            value="<?php echo $cover; ?>">
                                    </div>
                                </div>

								<div class="form-group">
									<label for=" "> Color: </label>
									<input type="text" class="form-control" id=" " name="color"
										placeholder="Enter product color " value="<?php echo $color; ?>" required>
								</div>


								<div class="form-group">
									<label for=" "> Size: </label>
									<input type="text" class="form-control" id=" " name="size"
										placeholder="Enter product size" value="<?php echo $size; ?>" required>
								</div>

								<div class="form-group">
									<label for=""> Quantity: </label>
									<input type="text" class="form-control" id=" " name="quantity"
										placeholder="Enter product quantity" value="<?php echo $quantity; ?>" required>
								</div>

								<div class="form-group">
									<label for=" "> Amount of product available: </label>
									<input type="text" class="form-control" id=" " name="available"
										placeholder="Enter amount of product currently available in stock "
										value="<?php echo $available; ?>" required>
								</div>

								<div class="form-group">
									<label for=" "> New: </label>
									<input type="text" class="form-control" id=" " name="new"
										placeholder="Confirm if the product is new or not?" value="<?php echo $new; ?>"
										required>
								</div>

								<div class="form-group">
									<label for=" "> Discount: </label>
									<input type="text" class="form-control" id=" " name="discount"
										placeholder="Enter product discount percentage" value="<?php echo $discount; ?>"
										required>
								</div>

								<div class="form-group">
									<label for="content">Describe the product :</label>
									<textarea class="form-control" rows="4" name="descpt"></textarea>
									<button class="btn btn-info2 pull-right" type="submit" id="save"
										name="save">Save</button>

							</form>
						</div>

					</div>
				</div>



				<!-- jQuery CDN - Slim version (=without AJAX) -->
				<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
					integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
					crossorigin="anonymous">
				</script>
				<!-- tether -->
				<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
				<!-- bootstrap -->
				<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
					integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
					crossorigin="anonymous">
				</script>
				<!-- Popper -->
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
					integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
					crossorigin="anonymous">
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