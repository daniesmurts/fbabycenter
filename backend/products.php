<?php
session_start(); 
        if(!(isset($_SESSION['username']))){
             header("location:index.php");
        }
							 require_once 'assets/includes/connexion.php';
							
							  
							 if (isset($_GET['edit_id'])) {
								 $id = $_GET['edit_id'];
								 //$id = $_GET['edit'];
								 $update = true;
								 $record = mysqli_query($dbc, "SELECT * FROM products WHERE id=$id");
						 
								 if (count($record) == 1 ) {
									 $n = mysqli_fetch_array($record);
									 $title = $n['name'];
									 $price = $n['price'];
									 $descpt = $n['descpt'];
									 $color = $n['color'];
									 $size = $n['size'];
									 $quantity = $n['quantity'];
									 $available = $n['available'];
									 $discount = $n['discount'];
									 $new = $n['new']; 
								 }
							 }


							if (isset($_POST['update'])) {

								$id = mysqli_real_escape_string($dbc, $_POST['id']);
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


				 include("assets/includes/upload_check.php");

								mysqli_query($dbc, "UPDATE products SET title='$title',  price='$price',   descpt='$descpt',  color='$color',  size='$size',  quantity='$quantity',  available='$available',  discount='$discount', new='$new', cover='$cover' WHERE id=$id");
								$successMSG  = "Data was succesfuly updated!"; 
								header('location: add_product.php');
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
						<h2 class="cat-heading">Banner</h2>
					</div>
					<div class="col-md-6 col-sm-12">
						<p> <a href="" class="setting_add">Add</a> &nbsp;/ &nbsp;<a href="all_featured.php"
								class="setting_edit">All Products</a> </p>
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
						<?php 
	
	require_once 'assets/includes/connexion.php';
 
	$i = 0;
	$query ="SELECT * FROM products";
	$query_run = mysqli_query($dbc,$query);
	
	?>
		<!------Table Aera ----------->

<?php include("res/all_products_table.php"); ?>	
						<!------End Table Aera ----------->
					</div>

				</div>

			</div>
			<!---- END CONTAINER ---->
		</div>
	</div>
	



	<!-----EDIT MODAL -------->
	<?php include("res/all_products_modal.php"); ?>	
	<!----- END EDIT MODAL ---->



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



	<script>
		$(document).ready(function () {
			$('.editbtn').on('click', function () {

				$('#editmodal').modal('show');

				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function () {
					return $(this).text();
				}).get();

				console.log(data);
				$('#update_id').val(data[0]);
				$('#categ_id').val(data[1]);
				$('#title').val(data[2]);
				$('#price').val(data[3]);
				$('#descpt').val(data[4]);
				$('#color').val(data[5]);
				$('#size').val(data[6]);
				$('#quantity').val(data[7]);
				$('#available').val(data[8]);
				$('#discount').val(data[9]);
				$('#new').val(data[10]);
				$('#cover').val(data[11]);
				$('#cover').val(data[12]);
				$('#cover').val(data[13]);

			});
		});
	</script>


	<script>
		$(document).ready(function () {
			$('.deletebtn').on('click', function () {

				$('#deletemodal').modal('show');

				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function () {
					return $(this).text();
				}).get();

				console.log(data);
				$('#delete_id').val(data[0]);


			});
		});
	</script>

	<script>
		$(document).ready(function () {
			$('#datatableid').DataTable({
				"pagingType": "full_numbers",
				"lengthMenu": [
					[10, 25, 50, -1],
					[10, 25, 50, "All"]
				],
				responsive: true,
				language: {
					search: "_INPUT_",
					searchPlaceholder: "Search records",
				}


			});
		});
	</script>




</body>

</html>