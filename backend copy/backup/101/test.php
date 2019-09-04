
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
     
    
    

    <title> Welcome </title>
  </head>
  <body>
              
              
        
      <!-- Add_Edit Modal -->
        <?php include("add_update_modal.php"); ?>
      <!--End Modal-->
      
      <?php include("db.php"); ?>
      
     <!---Delete Modal -----> 
      <?php include("delete_modal.php"); ?>
      
     
    <!-----######################## END DELETE MODAL ############################################################---->  
      
      
      
      
      
      
      <div class="container">
          <div class="jumbotron">
                  <h2> All Products</h2> 
              <hr>

          <div align="right">
            <button type="button" id="add_button" data-toggle="modal" data-target="#productModal" class="btn btn-info btn-lg">Add</button>
          </div>
             
                <?php include("product_table.php"); ?>      
                          
            
                     
          </div>
      </div>
              
              
              
              
              
              
              
             
    
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



    <!-- SCRIPT FOR PAGINATION -->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" ></script>   
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    
     
    

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  $('#add_button').click(function(){
    $('#product_form')[0].reset();
    $('.modal-title').text("Add Product");
    $('#action').val("Add");
    $('#operation').val("Add");
    $('#product_uploaded_image').html('');
  });
  
  var dataTable = $('#product_data').DataTable({
    "processing":true,
    "serverSide":true,
    "order":[],
    "ajax":{
      url:"fetch.php",
      type:"POST"
    },
    "columnDefs":[
      {
        "targets":[0, 3, 4],
        "orderable":false,
      },
    ],

  });

  $(document).on('submit', '#product_form', function(event){
    event.preventDefault();
    var name = $('#product_name').val();
    var descpt = $('#product_descpt').val();
    var extension = $('#product_image').val().split('.').pop().toLowerCase();
    if(extension != '')
    {
      if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
      {
        alert("Invalid Image File");
        $('#product_image').val('');
        return false;
      }
    } 
    if(name != '' && descpt != '')
    {
      $.ajax({
        url:"insert.php",
        method:'POST',
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(data)
        {
          alert(data);
          $('#product_form')[0].reset();
          $('#productModal').modal('hide');
          dataTable.ajax.reload();
        }
      });
    }
    else
    {
      alert("Both Fields are Required");
    }
  });
  
  $(document).on('click', '.update', function(){
    var product_id = $(this).attr("id");
    $.ajax({
      url:"fetch_single.php",
      method:"POST",
      data:{product_id:product_id},
      dataType:"json",
      success:function(data)
      {
        $('#productModal').modal('show');
        $('#product_name').val(data.name);
        $('#product_descpt').val(data.descpt);
        $('.modal-title').text("Edit Product");
        $('#product_id').val(product_id);
        $('#product_uploaded_image').html(data.picture);
        $('#action').val("Edit");
        $('#operation').val("Edit");
      }
    })
  });
  
  $(document).on('click', '.delete', function(){
    var product_id = $(this).attr("id");
    if(confirm("Are you sure you want to delete this?"))
    {
      $.ajax({
        url:"delete.php",
        method:"POST",
        data:{product_id:product_id},
        success:function(data)
        {
          alert(data);
          dataTable.ajax.reload();
        }
      });
    }
    else
    {
      return false; 
    }
  });
  
  
});
</script>

  </body>
</html>