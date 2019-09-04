
<!--<?php include("db.php"); ?> -->
        
    
      


<div class="row container-title">
        <br />
        <div class="col-lg-7 col-md-7 col-sm-12">
        <h2 class="cat-heading">Add a Category</h2>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-12 setting_links">
        <p> <a href="add_book.php" class="setting_add">Add</a> &nbsp;/ &nbsp;<a href="all_categories.php"
            class="setting_edit">Edit</a> </p>
        </div>
</div>


<hr>

<div align="right">
            <button type="button" id="add_button" data-toggle="modal" data-target="#productModal" class="btn btn-info btn-lg">Add</button>
</div>
             
<?php include("product_table.php"); ?>  



  <!-- Add_Edit Modal -->
  <?php include("add_update_modal.php"); ?>
      <!--End Modal-->
      
      
  <!---Delete Modal -----> 
  <?php include("delete_modal.php"); ?>

    
     
    

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
