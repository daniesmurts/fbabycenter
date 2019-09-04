<?php
session_start(); 
        if(!(isset($_SESSION['username']))){
             header("location:index.php");
        }
							 require_once 'assets/includes/connexion.php';
							
								
								
								if(isset($_POST['save']))
								{    
									//$categ_id = mysqli_real_escape_string($dbc, $_POST['categ_id']);
									$title = mysqli_real_escape_string($dbc, $_POST['title']); 
                                    $categ_id = mysqli_real_escape_string($dbc, $_POST['categ_id']); 
                                    $b_categ_id = mysqli_real_escape_string($dbc, $_POST['b_categ_id']);
                                    $descpt = mysqli_real_escape_string($dbc, $_POST['descpt']); 
									$new_price = mysqli_real_escape_string($dbc, $_POST['new_price']); 
									$old_price = mysqli_real_escape_string($dbc, $_POST['old_price']); 
                                    
									 
									$cover = $_FILES['cover']['name'];
			                        $cover_tmp_name = $_FILES['cover']['tmp_name']; 
									 
								   if(empty($title)){
										$errMSG = "Please, enter product name.";
                                    }  
                                    else if(empty($b_categ_id)){
										$errMSG = "Please, select a a best seller category.";
									}  
									 
									else if(empty($categ_id)){
										$errMSG = "Please, select a category.";
									}  
									else if(empty($descpt)){
										$errMSG = "Please, enter the product description.";
									} 
									else if(empty($cover)){
										$errMSG = "Please, select an image.";
                                    } 
                                    else if(empty($new_price)){
										$errMSG = "Please, enter the product discount price.";
                                    } 
                                    else if(empty($old_price)){
										$errMSG = "Please, select the product price.";
									} 
									
									
									//include("assets/includes/upload_check.php");
									
									
									  
									
									// if no error occured, continue ....
									if(!isset($errMSG))
									{    
    move_uploaded_file($cover_tmp_name,"assets/posted_images/$cover"); 	 

    include("assets/includes/upload_check_2.php");
    include("assets/includes/upload_check_3.php"); 
										
	$q = "INSERT INTO best_sellers (title, b_categ_id, categ_id, new_price, old_price, descpt, cover, cover2, cover3) VALUES('$title', '$b_categ_id', '$categ_id', '$new_price', '$old_price','$descpt', '$cover', '$cover2', '$cover3')";
											  
										$r = mysqli_query($dbc,$q);
										
										
										if($r){
											$successMSG = "Data was succesfuly added ...";
											header("refresh:3 ; add_best_seller.php");
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
                        <h2 class="cat-heading">Best Seller</h2>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 setting_links">
                        <p> <a href="" class="setting_add">Add</a> &nbsp;/ &nbsp;<a href="all_best_sellers.php"
                                class="setting_edit">All Best Sellers</a> </p>
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
                                    <label for="categ_title"> Choose a best seller category: </label>

                                    <?php 
                   
                  require_once 'assets/includes/connexion.php';
                  $q = "SELECT * FROM best_seller_categories ORDER BY  title ASC";        
                  $r = mysqli_query($dbc,$q);
                   ?>
                                    <select class="form-control" name="b_categ_id" id="">
                                        <option value="0">Select a best seller category.</option>
                                        <?php while ($data = mysqli_fetch_array($r)){
                  $b_categ_id = $data['id'];
                  $b_categ_title = $data['title']; 
                  ?>

                                        <option value="<?php echo $b_categ_id;?>"> <?php echo $b_categ_title; ?>
                                        </option>
                                        <?php } ?>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="categ_title"> Choose a the product category: </label>

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
                                    <label for="title"> Product Price : </label>
                                    <input type="text" class="form-control" id="title" name="old_price"
                                        placeholder="Enter product price" required>
                                </div>

                                <div class="form-group">
                                    <label for="title"> Product Discount Price : </label>
                                    <input type="text" class="form-control" id="title" name="new_price"
                                        placeholder="Enter product discount price" required>
                                </div>


                                <div class="form-group">
                                    <label for="cover"> Product Picture: </label>
                                    <input type="file" class="form-control" id=" " name="cover">
                                </div>


                                <div class="form-group">
                                    <label for="content">Describe the product :</label>
                                    <textarea class="form-control" rows="8" name="descpt"></textarea>
                                </div>


                                <button type="submit" id="save" name="save"
                                    class="btn btn-primary pull-right">Add</button>
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