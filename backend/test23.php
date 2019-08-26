<?php  
require_once 'connexion.php';
 $query ="SELECT * FROM all_products ORDER BY title DESC";  
 $result = mysqli_query($dbc, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Test</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Datatables Jquery Plugin with Php MySql and Bootstrap</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Image</td>  
                                    <td>Product Name</td>  
                                    <td>Product Description</td>  
                                    <td>Edit</td>  
                                    <td>Delete</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                              
                              ?>
                                 
                               <tr>  
                                    <td><img src="upload/<?php echo $row["cover"]; ?> class="img-thumbnail" width="50" height="35" /></td>  
                                    <td><?php echo $row["title"] ; ?></td>  
                                    <td><?php echo $row["descpt"]; ?></td>
                                    <td><button type="button" name="update" id="<?php echo $row["id"]; ?>" class="btn btn-warning btn-xs update">Update</button></td>
                                    <td><button type="button" name="delete" id="<?php echo  $row["id"]; ?>" class="btn btn-danger btn-xs delete">Delete</button></td>
                                     
                               </tr>   
                        <?php
                        }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  