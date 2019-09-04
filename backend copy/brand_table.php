<hr>
<div class="row mb-5 mt-5">

  <div class="col-md-6 col-sm-6">

    <div>
      <h2> All Brands </h2>
    </div>

  </div>
  <div class="col-md-6 col-sm-6">

    <div>
      <button type="button" id="add_button_brand" data-toggle="modal" data-target="#brandModal"
        class="btn btn-info3 mb-2">Add</button>
    </div>

  </div>

</div>
<hr>




<?php  
                require_once 'connexion.php';
                 $query ="SELECT * FROM brands ORDER BY title DESC";  
                $result = mysqli_query($dbc, $query);  
                ?>


<div class="col-md-12 col-sm-12">
  <div class="table-responsive">
    <table id="brand_data" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th width="20%">№</th>
          <th width="35%"> Brand Name</th>
          <th width="35%">Brand Descpt</th>
          <th width="5%">Edit</th>
          <th width="5%">Delete</th>
        </tr>
      </thead>
      <?php  
                          i = 0;
                          
                          while($row = mysqli_fetch_array($result))  
                          {  
                              i++;
                              ?>

      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["title"] ; ?></td>
        <td><?php echo $row["descpt"]; ?></td>
        <td><button type="button" name="update" id="<?php echo $row["id"]; ?>"
            class="btn btn-info2 btn-xs update">Update</button></td>
        <td><button type="button" name="delete" id="<?php echo  $row["id"]; ?>"
            class="btn btn-info-red btn-xs delete">Delete</button></td>

      </tr>
      <?php
                        }  
                          ?>
    </table>
  </div>
</div>

<script>
  < script type = "text/javascript"
  language = "javascript" >
    $(document).ready(function () {
      $('#brand_data').DataTable();
    });

  $(document).ready(function () {
    $('#add_button_brand').click(function () {
      $('#brand_form')[0].reset();
      $('.modal-title').text("Add brand");
      $('#action').val("Add");
      $('#operation').val("Add");
      $('#brand_uploaded_cover').html('');
      $('#brand_uploaded_cover2').html('');
      $('#brand_uploaded_cover3').html('');
    });



    $(document).on('submit', '#brand_form', function (event) {
      event.preventDefault();
      var categ_id = $('#brand_categ_id').val();
      var block_id = $('#brand_block_id').val();
      var title = $('#brand_title').val();
      var price = $('#brand_price').val();
      var new_price = $('#brand_new_price').val();
      var descpt = $('#brand_descpt').val();
      var color = $('#brand_color').val();
      var size = $('#brand_size').val();
      var quantity = $('#brand_quantity').val();
      var available = $('#brand_available').val();
      var discount = $('#brand_discount').val();
      var newz = $('#brand_newz').val();


      var extension = $('#brand_cover').val().split('.').pop().toLowerCase();
      if (extension != '') {
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
          alert("Invalid Image File");
          $('#brand_cover').val('');
          return false;
        }
      }






      if (title != '' || descpt != '') {
        $.ajax({
          url: "insert_brand.php",
          method: 'POST',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function (data) {
            alert(data);
            $('#brand_form')[0].reset();
            $('#brandModal').modal('hide');
            dataTable.ajax.reload();
          }
        });
      } else {
        alert("Please, be sure to fill brand Name and brand Descpt  Fields");
      }
    });




    $(document).on('click', '.update', function () {
      var brand_id = $(this).attr("id");
      $.ajax({
        url: "fetch_single_brand.php",
        method: "POST",
        data: {
          brand_id: brand_id
        },
        dataType: "json",
        success: function (data) {
          $('#brandModal').modal('show');

          $('#brand_title').val(data.title);
          $('#brand_descpt').val(data.descpt);


          $('.modal-title').text("Edit brand");
          $('#brand_id').val(brand_id);

          $('#brand_uploaded_cover').html(data.cover);

          $('#action').val("Edit");
          $('#operation').val("Edit");
        }
      })
    });

    $(document).on('click', '.delete', function () {
      var brand_id = $(this).attr("id");
      if (confirm("Are you sure you want to delete this?")) {
        $.ajax({
          url: "delete_brand.php",
          method: "POST",
          data: {
            brand_id: brand_id
          },
          success: function (data) {
            alert(data);
            dataTable.ajax.reload();
          }
        });
      } else {
        return false;
      }
    });


  });
</script>
</script>