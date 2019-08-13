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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add </title>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<script src="https://kit.fontawesome.com/6d64fe8c14.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
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
						<h2 class="cat-heading">All Products</h2>
					</div>

					<div class="col-lg-5 col-md-5 col-sm-12 setting_links">
						<p> <a href="add_product.php" class="setting_add">Add Products</a></p>
					</div>

				</div>

				<hr>

				<div class="row text-center">

 

					<div class="col-lg-12 col-md-12 col-sm-12">
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
	



<table id="datatableid" class="table table-bordered">
<thead>
<tr>
<th>N</th>
<th>Category</th>
<th>Name</th>
<th>Price</th>
<th>Description</th>
<th>Actions</th>
<th>Actions</th>
</tr>
</thead>

<?php 
        
        if($query_run){
            foreach($query_run as $row){
				$i++;
				/** 
				
                     ***/
?>   
		
<tbody>
	<tr>
		<td><?php echo $i; ?></td>
		

				<td><?php	
				$c_id = $row['categ_id'];
				$query25 ="SELECT * FROM categories WHERE id= $c_id ";
				$query_run25 = mysqli_query($dbc,$query25);
				while ($data25 = mysqli_fetch_array($query_run25)){
					$categ_id = $data25['id'];
					$categ_title = $data25['title']; 
				
				echo $categ_title; }
				
				
				?></td>
		
<style> .dp_none{display:none;}</style>
		<td><span id="title<?php echo $row['id']; ?>"><?php echo $row['title']; ?></span></td>
		<td><span id="price<?php echo $row['id']; ?>"><?php echo $row['price']; ?></span></td>
        <td><span id="descpt<?php echo $row['id']; ?>"><?php echo $row['descpt']; ?></span></td>
        
        <span class="dp_none" id="color<?php echo $row['id']; ?>"><?php echo $row['color']; ?></span> 
        <span  class="dp_none" id="size<?php echo $row['id']; ?>"><?php echo $row['size']; ?></span>
        <span class="dp_none" id="quantity<?php echo $row['id']; ?>"><?php echo $row['quantity']; ?></span> 
        <span  class="dp_none" id="available<?php echo $row['id']; ?>"><?php echo $row['available']; ?></span>
        <span class="dp_none" id="discount<?php echo $row['id']; ?>"><?php echo $row['discount']; ?></span> 
        <span  class="dp_none" id="new<?php echo $row['id']; ?>"><?php echo $row['new']; ?></span>
        <span class="dp_none" id="cover<?php echo $row['id']; ?>"><?php echo $row['cover']; ?></span>  
        <span class="dp_none" id="cover2<?php echo $row['id']; ?>"><?php echo $row['cover2']; ?></span>  
        <span class="dp_none" id="cover3<?php echo $row['id']; ?>"><?php echo $row['cover3']; ?></span>  

		<td>
        <button type="button" class="btn btn-success edit" value="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</button> 
        </td>
        
		<td>
        <button type="button" class="btn btn-danger deletebtn"> Delete </button>
        </td>
        
	</tr>
 
</tbody>
<?php 
/*** }*/
		   }
        }
        else{
            echo "No Record found";
        }
         
        ?> 
</table>

	<!------ENd Form Aera ----------->
					</div> <!---End div col-10 --->

 


				</div>

			</div>
		</div>

	</div> <!---- END CONTAINER ---->




<!-----######################## EDIT MODAL ############################################################--------> 
      
      
        <!-- Modal -->
        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Product Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
			  </div>
			  
          
                  <form action="updatecode.php" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                  
		<input type="hidden" class="form-control" id="eid" name="eid"  required>
                  
				  
					 	  

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
									<input type="text" class="form-control" id="etitle" name="title"  required>
								</div>

								<div class="form-group">
									<label for="title"> Product Price : </label>
									<input type="text" class="form-control" id="eprice" name="price"  required>
                                </div>
                                

                                <div class="form-group">
									<label for="title"> Product Price : </label>
									<input type="text" class="form-control" id="edescpt" name="descpt"  required>
                                </div> 

						      <div class="form-group">
									<label for=" "> Color: </label>
									<input type="text" class="form-control" id="ecolor" name="color"   required>
								</div>


								<div class="form-group">
									<label for=" "> Size: </label>
									<input type="text" class="form-control" id="esize" name="size" required>
								</div>

								<div class="form-group">
									<label for=""> Quantity: </label>
									<input type="text" class="form-control" id="equantity" name="quantity"   required>
								</div>

								<div class="form-group">
									<label for=" "> Amount of product available: </label>
									<input type="text" class="form-control" id="eavailable" name="available"  required>
								</div>

								<div class="form-group">
									<label for=" "> New: </label>
									<input type="text" class="form-control" id="enew" name="new"  required>
								</div>

								<div class="form-group">
									<label for=" "> Discount: </label>
									<input type="text" class="form-control" id="ediscount" name="discount"  required>
								</div>

								<div class="form-group">
									<label for="content">Describe the product :</label>
									<textarea class="form-control" id="edescpt" rows="4" name="descpt"></textarea>
                                </div>
                                
                                <div class="form-group">
									<label for=" "> Discount: </label>
									<input type="text" class="form-control" id="ecover" name="cover"  required>
                                </div>
                                
                        


            
<?php
   $cover225=  "<script>document.writeln(cover);</script>";
?>

<img src="assets/posted_images/<?php echo $cover225; ?>" width="20" height="20">
 
						<!--		<div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="cover"> Image 1: </label>
										<input type="file" class="form-control" id="ecover" name="cover">
										<img src="assets/posted_images/<?php echo $row['cover']; ?>" width="20" height="20">
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="cover"> Image 2: </label>
										<input type="file" class="form-control" id="ecover2" name="cover2">
										<img src="assets/posted_images/<?php echo $row['cover2']; ?>" width="20" height="20">
                                    </div>
                                    
                                    <div class="form-group col-md-4">
                                        <label for="cover"> Image 3: </label>
										<input type="file" class="form-control"  name="cover3">
										<img src="assets/posted_images/<?php echo $row['cover3']; ?>" width="20" height="20">
                                    </div>
								</div>  -->
								
								
                      
                      
                      
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
				
              </div> 

                    </form>
            </div>
          </div>
        </div>
      
      
     
    <!-----######################## END EDIT MODAL ############################################################---->  
      
      
      













	<script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
	<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>-->

	<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


<script>
 $(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
	    var title=$('#title'+id).text();
		var price=$('#price'+id).text();
		var descpt=$('#descpt'+id).text(); 
		var  color=$('#color'+id).text(); 
		var  size=$('#size'+id).text();  
		var  quantity=$('#quantity'+id).text();  
		var  available=$('#available'+id).text();   
		var  discount=$('#discount'+id).text();  
		var  newz=$('#new'+id).text();   
		var  cover=$('#cover'+id).text(); 
		var  cover2=$('#cover2'+id).text();    
		var  cover3=$('#cover3'+id).text();  
 

        
		$('#edit').modal('show');
		$('#etitle').val(title);

		$('#eid').val(id);
		 $('#eprice').val(price);
		$('#edescpt').val(descpt);  

		$('#ecolor').val(color);  
		$('#esize').val(size); 
        $('#equantity').val(quantity);  
		$('#eavailable').val(available);    
        $('#ediscount').val(discount);  
		$('#enew').val(newz);    
        $('#ecover').val(cover);  
		$('#ecover2').val(cover2);    
        $('#ecover3').val(cover3);   
	});
});

</script>
 


<script>

 $(document).ready(function(){
     $('.deletebtn').on('click', function(){
         
         $('#deletemodal').modal('show');
         
         $tr = $(this).closest('tr');
         
         var data = $tr.children("td").map(function() {
             return $(this).text();
         }).get();
         
         console.log(data);
        $('#delete_id').val(data[0]);
        
         
     });
 });
    
    
</script>

<script>

        $(document).ready(function(){
            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                    ],
                    responsive:true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search records",
                    }
                
                
            });
        });

</script>




</body>

</html>