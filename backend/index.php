<?php
session_start(); 
        if(!(isset($_SESSION['username']))){
            // header("../location:index.php");
        }
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

  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->



  <!-- fonts -->
  <!--<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
-->
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
          <div class="col-md-12 col-sm-12">

            <!-- <form action="" method="post" class="form-inline">
              <div class="form-group">
                <label for="pwd">See All Products in :</label>
                <?php 
                   
                  require_once 'connexion.php';
                   $q = "SELECT * FROM page_block ORDER BY  title ASC";        
                   $r = mysqli_query($dbc,$q); 
                    ?>
                <select class="form-control" name="product_block_id2" id="product_block_id2">
                  <option value="0">Select Page Block.</option>
                  <?php  
                  while ($data = mysqli_fetch_array($r)){
                   $see_block_id = $data['id'];
                   $see_block_title = $data['title']; 
                   ?>
                  <option value="<?php echo $see_block_id;?>"> <?php echo $see_block_title; ?> </option>
                  <?php } ?>

                </select>

              </div>

             
              <input type="hidden" id="product_block_title" value="<?php echo $see_block_title; ?>"> 
              <button id="send_block_id" name="send_block_id" class="btn btn-info3">Go !</button>

            </form> -->

            <form id="app-cover" action="" method="post">
            <div id="select-box">
                    <input type="checkbox" class="options-view-button-css"  name="product_block_id2" id="product_block_id2">
                    <div id="select-button" class="brd">
                            <div id="selected-value">
                                <span>All Products</span>
                            </div>
                            <?php 
                   
                   require_once 'connexion.php';
                    $q = "SELECT * FROM page_block ORDER BY  title ASC";        
                    $r = mysqli_query($dbc,$q); 
                     ?>
                            <div id="chevrons">
                                    <i class="fas fa-chevron-up"></i>
                                    <i class="fas fa-chevron-down"></i>
                            </div>
                    </div>
                    <?php  
                  while ($data = mysqli_fetch_array($r)){
                   $see_block_id = $data['id'];
                   $see_block_title = $data['title']; 
                   ?>
                    <div id="options">
                             <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="<?php echo $see_block_id;?>">
                                    <input class="s-c bottom" type="radio" name="platform" value="<?php echo $see_block_id;?>">
                                    <i class="fab fa-codepen"></i>
                                    <span class="label"> <?php echo $see_block_title; ?></span>
                                    <span class="opt-val"> <?php echo $see_block_title; ?></span>
                            </div>
                  <?php } ?>          
                          <!--  <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="dribbble">
                                    <input class="s-c bottom" type="radio" name="platform" value="dribbble">
                                    <i class="fab fa-dribbble"></i>
                                    <span class="label">Dribbble</span>
                                    <span class="opt-val">Dribbble</span>
                            </div>
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="behance">
                                    <input class="s-c bottom" type="radio" name="platform" value="behance">
                                    <i class="fab fa-behance"></i>
                                    <span class="label">Behance</span>
                                    <span class="opt-val">Behance</span>
                            </div>
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="hackerrank">
                                    <input class="s-c bottom" type="radio" name="platform" value="hackerrank">
                                    <i class="fab fa-hackerrank"></i>
                                    <span class="label">HackerRank</span>
                                    <span class="opt-val">HackerRank</span>
                            </div>
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="stackoverflow">
                                    <input class="s-c bottom" type="radio" name="platform" value="stackoverflow">
                                    <i class="fab fa-stack-overflow"></i>
                                    <span class="label">StackOverflow</span>
                                    <span class="opt-val">StackOverflow</span>
                            </div>
                            <div class="option">
                                    <input class="s-c top" type="radio" name="platform" value="freecodecamp">
                                    <input class="s-c bottom" type="radio" name="platform" value="freecodecamp">
                                    <i class="fab fa-free-code-camp"></i>
                                    <span class="label">FreeCodeCamp</span>
                                    <span class="opt-val">FreeCodeCamp</span>
                            </div> -->
                            <div id="option-bg"></div>
                    </div>
            </div>
    </form>

          </div>

        </div>





        <div class="row">

          <?php  
             if(isset($_POST['send_block_id'])){
                 $product_block_id2 = $_POST['product_block_id2'];
              include('product_table.php');  
             }
            ?>

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
        $('#product_uploaded_cover2').html('');
        $('#product_uploaded_cover3').html('');
      });

      /***
       
          var dataTable = $('#product_data').DataTable({
              "processing": true,
              "serverSide": true,
              "order": [],
              "ajax": {
                url: "fetch.php",
                type: "POST",
              },
              "columnDefs": [{
                "targets": [0, 3, 4],
                "orderable": false,
              }, ],

            });

      ***/
      /***
      $('#send_block_id').click(function () {
        event.preventDefault();
    var pdt_block_id = $('#product_block_id2').val();
    var pdt_block_title = $('#product_block_title').val();
    
    
      
      
    $.ajax({
        url: 'fetch.php',
        type: 'POST',
        data: { product_block_id2: pdt_block_id, product_block_title: pdt_block_title },
            success : function(resp){  
                    alert(resp);
           // $('#product_block_id2').val(data.pdt_block_id2);
            $('#product_data').html(resp);
            }
        
    });
});

****/





      $(document).on('submit', '#product_form', function (event) {
        event.preventDefault();
        var categ_id = $('#product_categ_id').val();
        var block_id = $('#product_block_id').val();
        var title = $('#product_title').val();
        var price = $('#product_price').val();
        var new_price = $('#product_new_price').val();
        var descpt = $('#product_descpt').val();
        var color = $('#product_color').val();
        var size = $('#product_size').val();
        var quantity = $('#product_quantity').val();
        var available = $('#product_available').val();
        var discount = $('#product_discount').val();
        var newz = $('#product_newz').val();


        var extension = $('#product_cover').val().split('.').pop().toLowerCase();
        if (extension != '') {
          if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
            $('#product_cover').val('');
            return false;
          }
        }

        var extension2 = $('#product_cover2').val().split('.').pop().toLowerCase();
        if (extension2 != '') {
          if (jQuery.inArray(extension2, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
            $('#product_cover2').val('');
            return false;
          }
        }

        var extension3 = $('#product_cover3').val().split('.').pop().toLowerCase();
        if (extension3 != '') {
          if (jQuery.inArray(extension3, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
            $('#product_cover3').val('');
            return false;
          }
        }


        if (title != '' && descpt != '') {
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
          alert("Both Fields are Required");
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

            $('#product_categ_id').val(data.categ_id);
            $('#product_block_id').val(data.block_id);
            $('#product_title').val(data.title);
            $('#product_price').val(data.price);
            $('#product_new_price').val(data.new_price);
            $('#product_descpt').val(data.descpt);
            $('#product_color').val(data.color);
            $('#product_size').val(data.size);
            $('#product_quantity').val(data.quantity);
            $('#product_available').val(data.available);
            $('#product_discount').val(data.discount);
            $('#product_newz').val(data.newz);


            $('.modal-title').text("Edit Product");
            $('#product_id').val(product_id);

            $('#product_uploaded_cover').html(data.cover);
            $('#product_uploaded_cover2').html(data.cover2);
            $('#product_uploaded_cover3').html(data.cover3);

            $('#action').val("Edit");
            $('#operation').val("Edit");
          }
        })
      });

      $(document).on('click', '.delete', function () {
        var product_id = $(this).attr("id");
        if (confirm("Are you sure you want to delete this?")) {
          $.ajax({
            url: "delete.php",
            method: "POST",
            data: {
              product_id: product_id
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


   


</body>

</html>