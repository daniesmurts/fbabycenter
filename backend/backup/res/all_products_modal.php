<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
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

						<input type="hidden" class="form-control" id="update_id" name="update_id">




						<div class="form-group">
							<label for="categ_title"> Choose a category: </label>

							<?php 
                   
                  require_once 'assets/includes/connexion.php';
                  $q = "SELECT * FROM categories ORDER BY  title ASC";        
                  $r = mysqli_query($dbc,$q);
                   ?>
							<!---		<select class="form-control" name="categ_id" id="">
										<option value="0">Select category.</option>
										<?php while ($data = mysqli_fetch_array($r)){
                  $categ_id = $data['id'];
                  $categ_title = $data['title']; 
                  ?>
										<option value="<?php echo $categ_id;?>"> <?php echo $categ_title; ?> </option>
										<?php } ?>

									</select>   --->
						</div>


						<div class="form-group">
							<label for="title"> Category Title : </label>
							<input type="text" class="form-control" id="categ_id" name="categ_id" required>
						</div>

						<div class="form-group">
							<label for="title"> Name : </label>
							<input type="text" class="form-control" id="title" name="title" required>
						</div>

						<div class="form-group">
							<label for="title"> Product Px : </label>
							<input type="text" class="form-control" id="price" name="price"
								placeholder="Enter product name" required>
						</div>



						<div class="form-group">
							<label for=" "> Color: </label>
							<input type="text" class="form-control" id="color" name="color"
								placeholder="Enter product color " required>
						</div>


						<div class="form-group">
							<label for=" "> Size: </label>
							<input type="text" class="form-control" id="size" name="size"
								placeholder="Enter product size" required>
						</div>

						<div class="form-group">
							<label for=""> Qty: </label>
							<input type="text" class="form-control" id="quantity" name="quantity"
								placeholder="Enter product quantity" required>
						</div>

						<div class="form-group">
							<label for=" "> Amount available: </label>
							<input type="text" class="form-control" id="available" name="available"
								placeholder="Enter amount of product currently available in stock " required>
						</div>

						<div class="form-group">
							<label for=" "> New: </label>
							<input type="text" class="form-control" id="new" name="new"
								placeholder="Confirm if the product is new or not?" required>
						</div>

						<div class="form-group">
							<label for=" "> Discount: </label>
							<input type="text" class="form-control" id="discount" name="discount"
								placeholder="Enter product discount percentage" required>
						</div>

						<div class="form-group">
							<label for="content">Description:</label>
							<textarea class="form-control" id="descpt" rows="4" name="descpt"></textarea>
						</div>

						<div class="row">
							<div class="form-group col-md-4">
								<label for="cover"> Img1: </label>
								<input type="file" class="form-control" id="cover" name="cover">
								<img src="assets/posted_images/<?php echo $row['cover']; ?>" width="20" height="20">
							</div>

							<div class="form-group col-md-4">
								<label for="cover"> Img2: </label>
								<input type="file" class="form-control" id="cover2" name="cover2">
								<img src="assets/posted_images/<?php echo $row['cover']; ?>" width="20" height="20">
							</div>

							<div class="form-group col-md-4">
								<label for="cover"> Img3: </label>
								<input type="file" class="form-control" id="cover3" name="cover3">
								<img src="assets/posted_images/<?php echo $row['cover']; ?>" width="20" height="20">
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>

					</div>


				</form>
			</div>
		</div>
	</div>