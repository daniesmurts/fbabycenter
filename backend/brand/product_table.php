<hr>
<div class="row mb-5 mt-5">
  
  <div class="col-md-6 col-sm-6">
    
    <div>
      <h2> Brands </h2>
    </div>
 
  </div>
  <div class="col-md-6 col-sm-6">

    <div>
      <button type="button" id="add_button" data-toggle="modal" data-target="#productModal"
        class="btn btn-info3 mb-2">Add</button>
    </div>
  
  </div>

</div>
<hr>




<?php  
                require_once 'connexion.php';
                 $query ="SELECT * FROM brand   ORDER BY title DESC";  
                $result = mysqli_query($dbc, $query);  
                ?>


<div class="col-md-12 col-sm-12">
  <div class="table-responsive">
    <table id="product_data" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th width="20%">Image</th>
          <th width="35%"> Product Name</th>
          <th width="35%">Product Descpt</th>
          <th width="5%">Edit</th>
          <th width="5%">Delete</th>
        </tr>
      </thead>
      <?php  
                          
                          
                          while($row = mysqli_fetch_array($result))  
                          {  
                              
                              ?>

      <tr>
        <td><img src="upload/<?php echo $row["cover"]; ?>" class="img-thumbnail" width="50" height="35" />
        </td>
        <td><?php echo $row["title"] ; ?></td>
        <td><?php echo $row["descpt"]; ?></td>
        <td><button type="button" name="update" id="<?php echo $row["id"]; ?>"
            class="btn btn-info2 btn-xs update"><i class="fas fa-edit fa-2x"></i></button></td>
        <td><a  href="index.php?see_block_id=<?php echo $row["block_id"]; ?>" id="<?php echo  $row["id"]; ?>"
            class="btn btn-info-red btn-xs delete"><i class="fas fa-trash-alt fa-2x"></i></button></td>

      </tr>
      <?php
                        }  
                          ?>
    </table>
  </div>
</div>