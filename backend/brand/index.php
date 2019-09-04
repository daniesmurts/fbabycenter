<?php session_start(); ob_start();
        if(!(isset($_SESSION['username']))){
             header("location: login/index.php");
        }
        ob_end_flush();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta title="viewport" content="width=device-width, initial-scale=1">
  <title>FbabyCenter </title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="main.css">


  <!-- BOOTSTRAP COLOR PICKER CSS -->
  <!--<link rel="stylesheet" href="https://github.com/farbelous/bootstrap-colorpicker.git">-->



  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

  <!-- FontAwesome JS -->
  <script src="https://kit.fontawesome.com/6d64fe8c14.js"></script>

  <script src="https://kit.fontawesome.com/6d64fe8c14.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">




</head>

<body>
  <div class="wrapper">
    <!-- sidebar -->
    <?php include("aside.php"); ?>
    <!-- page content -->
    <div id="content">
      <?php include("navbar.php"); ?>

      <div class="container">



        <div class="row">
          <div class="col-md-12 col-sm-12">

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


          </div>
        </div>


        <!-- Add_Edit Modal -->
        <?php include("add_update_modal.php"); ?> 
        <!--End Modal-->

        <?php include("db.php"); ?>

        <!---Delete Modal ----->
        <?php include("delete_modal.php"); ?>


        <!-----######################## END DELETE MODAL ############################################################---->


         



        <div class="row">
          <div class="col-md-12">
            <?php  
              include('product_table.php');  ?>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!---WRAPPER ----->




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
    integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
    integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
  </script>



  <!-- SCRIPT FOR PAGINATION -->
  <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>




  <script type="text/javascript" language="javascript">
    $(document).ready(function () {
      $('#product_data').DataTable();
    });

    $(document).ready(function () {
      $('#add_button').click(function () {
        $('#product_form')[0].reset();
        $('.modal-title').text("Add Product");
        $('#action').val("Add");
        $('#operation').val("Add");
        $('#product_uploaded_cover').html(''); 
      });



      $(document).on('submit', '#product_form', function (event) {
        event.preventDefault();  
        var title = $('#product_title').val(); 
        var descpt = $('#product_descpt').val(); 


        var extension = $('#product_cover').val().split('.').pop().toLowerCase();
        if (extension != '') {
          if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
            $('#product_cover').val('');
            return false;
          }
        }

        


        if (title != '' || descpt != '') {
 
    

   


          $.ajax({
            url: "insert.php",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {
               

              alert(data);
          $('#product_form')[0].reset();
          $('#productModal').modal('hide');
          dataTable.ajax.reload();

            }
          });
        } else {
          alert("Please, be sure to fill Brand Name and Brand Description Fields");
        }
      });




      $(document).on('click', '.update', function () {
        var product_id = $(this).attr("id");
        $.ajax({
          url: "fetch_single.php",
          method: "POST",
          data: {
            product_id: product_id
          },
          dataType: "json",
          success: function (data) {
            $('#productModal').modal('show');
 
            $('#product_title').val(data.title); 
            $('#product_descpt').val(data.descpt); 


            $('.modal-title').text("Edit Product");
            $('#product_id').val(product_id);

            $('#product_uploaded_cover').html(data.cover); 

            
        $('#action').val("Edit");
        $('#operation').val("Edit");
 
          }
        })
      });




      $(document).on('click', '.delete', function () {
        var product_id = $(this).attr("id");

       /*** var url = 'index.php?'; 
            url += 'see_block_id=' + $('#product_block_id').val();***/
        if (confirm("Are you sure you want to delete this?")) {
          $.ajax({
            url: "delete.php",
            method: "POST",
            data: {
              product_id: product_id
            },
            success:function(data)
        {
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





</body>

</html>