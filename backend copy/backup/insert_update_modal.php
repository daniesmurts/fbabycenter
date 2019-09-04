


<div id="productModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true"> 
			<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"> Add Product Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>


				<form method="post" id="product_form" enctype="multipart/form-data">
					<div class="modal-body">

						<input type="hidden" class="form-control" id="update_id" name="update_id">

						<div class="form-group">
							<label for="categ_title"> Choose a category: </label>
							<select class="form-control" name="categ_id" id="">
								<option value="0">Select category.</option>
								<option value="4"> Car seats and Carriers </option>
								<option value="5"> Clothing </option>
								<option value="6"> Feeding </option>
								<option value="7"> Gifts </option>
								<option value="1"> New arrivals </option>
							</select>  
						</div>


						<div class="form-group">
							<label for="title"> Enter Product Name: </label>
							<input type="text" name="name" id="product_name" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label for="title"> Enter Product Description: </label>
							<input type="text" name="descpt" id="product_descpt" class="form-control" required>
						</div>

						<div class="row">
							<div class="form-group col-md-4">
								<label>Select Product Image: </label>
								<input type="file" name="picture" class="form-control" id="product_image" />
								<span id="product_uploaded_image"></span>
							</div>

						<!---	<div class="form-group col-md-4">
								<label for="cover"> Img2: </label>
								<input type="file" class="form-control" id="cover2" name="cover2">
								<img src="assets/posted_images/" width="20" height="20">
							</div>

							<div class="form-group col-md-4">
								<label for="cover"> Img3: </label>
								<input type="file" class="form-control" id="cover3" name="cover3">
								<img src="assets/posted_images/" width="20" height="20">
							</div>  -->
						</div>

						<div class="modal-footer"> 
							<input type="hidden" name="product_id" id="product_id" />
							<input type="hidden" name="operation" id="operation" />
							<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>

				</div>
			</form>
		</div>
	</div>
</div>






		<form >
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Product</h4>
				</div>
				<div class="modal-body">
					<label></label>
					<input type="text"  />
					<br />
					<label></label>
					<input type="text"  class="form-control" />
					<br />
					<label>Select Product Image</label>
					<input type="file" name="picture" id="product_image" />
					<span id="product_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="product_id" id="product_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

