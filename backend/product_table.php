          
           <?php  
                require_once 'connexion.php';
                 $query1 ="SELECT * FROM page_block WHERE id = $product_block_id2 ";  
                 $result1 = mysqli_query($dbc, $query1);  
                 ?> 
          
          <div class="col-md-12 col-sm-12">
               <?php  
                          
                          
                          while($row1 = mysqli_fetch_array($result1))  
                          {  
                              
                              ?>
           <div align="left"> <h2> <?php echo $row1['title']; ?></h2> </div> 
            
            <?php } ?>
            
            
            <div align="right ">
              <button type="button" id="add_button" data-toggle="modal" data-target="#productModal"
                class="btn btn-info3 mb-2">Add</button>
            </div> 
            <hr>

            
              
          </div>
          
          
          
               <?php  
                require_once 'connexion.php';
                 $query ="SELECT * FROM all_products WHERE block_id = $product_block_id2 ORDER BY title DESC";  
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
                                    <td><img src="upload/<?php echo $row["cover"]; ?>" class="img-thumbnail" width="50" height="35" /></td>  
                                    <td><?php echo $row["title"] ; ?></td>  
                                    <td><?php echo $row["descpt"]; ?></td>
                                    <td><button type="button" name="update" id="<?php echo $row["id"]; ?>" class="btn btn-info2 btn-xs update">Update</button></td>
                                    <td><button type="button" name="delete" id="<?php echo  $row["id"]; ?>" class="btn btn-info-red btn-xs delete">Delete</button></td>
                                     
                               </tr>   
                        <?php
                        }  
                          ?>  
                     </table>  
                </div>  
        </div>


    
    