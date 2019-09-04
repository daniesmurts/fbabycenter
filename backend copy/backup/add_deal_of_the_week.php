<?php
session_start(); 
        if(!(isset($_SESSION['username']))){
             header("location:index.php");
        }
							 require_once 'assets/includes/connexion.php';
							
								
								
								if(isset($_POST['save']))
								{     
									$title = mysqli_real_escape_string($dbc, $_POST['title']);  
									$descpt = mysqli_real_escape_string($dbc, $_POST['descpt']); 
									$color = mysqli_real_escape_string($dbc, $_POST['color']);  
									$size = mysqli_real_escape_string($dbc, $_POST['size']); 
									$new_price = mysqli_real_escape_string($dbc, $_POST['new_price']); 
									$old_price = mysqli_real_escape_string($dbc, $_POST['old_price']); 
									$quantity = mysqli_real_escape_string($dbc, $_POST['quantity']);
									$available = mysqli_real_escape_string($dbc, $_POST['available']); 
									$discount = mysqli_real_escape_string($dbc, $_POST['discount']);  
									$categ_id = mysqli_real_escape_string($dbc, $_POST['categ_id']); 
								
			                        
									
									 

								   if(empty($title)){
										$errMSG = "Please, enter product name.";
									}  
									else if(empty($descpt)){
										$errMSG = "Please, describe the product.";
									}
									else if(empty($color)){
										$errMSG = "Please, enter product color.";
									}
									else if(empty($size)){
										$errMSG = "Please, enter product size.";
									}
									else if(empty($categ_id)){
										$errMSG = "Please, enter product category.";
									}
									else if(empty($old_price)){
										$errMSG = "Please, enter product price.";
									}else if(empty($new_price)){
										$errMSG = "Please, enter the discount price.";
									}
									else if(empty($quantity)){
										$errMSG = "Please, enter product quantity.";
									}
									else if(empty($available)){
										$errMSG = "Please, enter the number of available product in stock.";
									}
									else if(empty($discount)){
										$errMSG = "Please, confirm if the product is on discount!";
									}
									
									
									
									
									  
									
									// if no error occured, continue ....
									if(!isset($errMSG))
									{    
										include("assets/includes/upload_check.php"); 
										include("assets/includes/upload_check_2.php");
										include("assets/includes/upload_check_3.php");
										
				$q = "INSERT INTO dow (categ_id, title, descpt, color, size, new_price, old_price, quantity, available, discount, cover, cover3, cover3) VALUES('$categ_id','$title', '$descpt', '$color', '$size','$new_price', '$old_price', '$quantity', '$available', '$discount', '$cover','$cover2','$cover3')";
											  
										$r = mysqli_query($dbc,$q);
										
										
										if($r){
											$successMSG = "Data was succesfuly added ...";
											header("refresh:3 ; add_deal_of_the_week.php");
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
	<title>Add </title>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="https://kit.fontawesome.com/6d64fe8c14.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<?php include("assets/includes/navbar.php"); ?>
	<div class="container-fluid main-container">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-12 aside">
				<?php include("assets/includes/aside.php"); ?>
			</div>


			<div class="col-lg-10 col-md-10 col-sm-12">

				<div class="row container-title"><br />

					<div class="col-lg-7 col-md-7 col-sm-12">
						<h2 class="cat-heading">Deal of the Week</h2>
					</div>

					<div class="col-lg-5 col-md-5 col-sm-12 setting_links">
						<p> <a href="add_deal_of_the_week.php" class="setting_add">Add</a> &nbsp;/ &nbsp;<a
								href="all_dow.php" class="setting_edit">All Deal of the week</a> </p>
					</div>

				</div>

				<hr>

				<div class="row text-center">


					<div class="col-lg-1 col-md-1 col-sm-12"></div>

					<div class="col-lg-10 col-md-10 col-sm-12">
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
									<label for="title"> Product Name : </label>
									<input type="text" class="form-control" id="title" name="title"
										placeholder="Enter product name" required>
								</div>

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
										placeholder="Enter product color " required>
								</div>


								<div class="form-group">
									<label for=" "> Size: </label>
									<input type="text" class="form-control" id=" " name="size"
										placeholder="Enter product size" required>
								</div>

								<div class="form-group">
									<label for=" "> Current price: </label>
									<input type="text" class="form-control" id=" " name="old_price"
										placeholder="Enter product current price" required>
								</div>


								<div class="form-group">
									<label for=" "> Discount price: </label>
									<input type="text" class="form-control" id=" " name="new_price"
										placeholder="Enter product discount price" required>
								</div>

								<div class="form-group">
									<label for=""> Quantity: </label>
									<input type="text" class="form-control" id=" " name="quantity"
										placeholder="Enter product quantity" required>
								</div>

								<div class="form-group">
									<label for=" "> Amount of product available: </label>
									<input type="text" class="form-control" id=" " name="available"
										placeholder="Enter amount of product currently available in stock " required>
								</div>

								<div class="form-group">
									<label for=" "> New: </label>
									<input type="text" class="form-control" id=" " name="new"
										placeholder="Confirm if the product is new or not?" required>
								</div>

								<div class="form-group">
									<label for=" "> Discount: </label>
									<input type="text" class="form-control" id=" " name="discount"
										placeholder="Enter product discount percentage" required>
								</div>




								<div class="form-group">
									<label for="content">Describe the product :</label>
									<textarea class="form-control" rows="4" name="descpt"></textarea>
								</div>


								<button type="submit" id="save" name="save"
									class="btn btn-info2 pull-right">Add</button>
							</form>
						</div>
						<!------ENd Form Aera ----------->
					</div>


					<div class="col-lg-1 col-md-1 col-sm-12"></div>


				</div>

			</div>
		</div>

	</div>

	<script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
</body>

</html>