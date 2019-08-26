<table id="datatableid" class="table table-bordered">
							<thead>
								<tr>
									<th>N</th>
									<th>Category</th>
									<th>Name</th>
									<th>Px</th>
									<th>Description</th>
									<th>Color</th>
									<th>Size</th>
									<th>Qty</th>
									<th>available</th>
									<th>Discount</th>
									<th>New</th>
									<th>Img1</th>
									<th>Img2</th>
									<th>Img3</th>
									<th>Edit</th>
									<th>Delete</th>
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


									<td><?php echo $row['title']; ?></td>
									<td><?php echo $row['price']; ?></td>
									<td><?php echo $row['descpt']; ?></td>
									<td><?php echo $row['color']; ?></td>
									<td><?php echo $row['size']; ?></td>
									<td><?php echo $row['quantity']; ?></td>
									<td><?php echo $row['available']; ?></td>
									<td><?php echo $row['discount']; ?></td>
									<td><?php echo $row['new']; ?></td>
									<td><?php echo $row['cover']; ?></td>
									<td><?php echo $i; ?></td>
									<td><?php echo $i; ?></td>

									<td>
										<button type="button" class="btn btn-success editbtn"> Edit </button>
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
