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
          
          <style>
          .select_btnn{
              border:10px solid red;
              width:800px;
              color:black;
          }
          
          
          </style>
          
                <div class="select_btnn"> 
                    <select id="employee">
                    <option value="" selected="selected">Select Employee Name</option>
                    <?php
                    
                    
                    require_once 'connexion.php';
                    $sql = "SELECT id, title, descpt, cover FROM all_products LIMIT 10";
                    $resultset = mysqli_query($dbc, $sql) or die("database error:". mysqli_error($dbc));
                    while( $rows = mysqli_fetch_assoc($resultset) ) {
                    ?>
                    <option value="<?php echo $rows["id"]; ?>">
                    <?php }	?>
                    </select> 
                </div>

<script>
    
    $(document).ready(function(){
// code to get all records from table via select box
$("#employee").change(function() {
var id = $(this).find(":selected").val();
var dataString = 'empid='+ id;
$.ajax({
url: 'getEmployee.php',
dataType: "json",
data: dataString,
cache: false,
success: function(employeeData) {
if(employeeData) {
$("#heading").show();
$("#no_records").hide();
$("#emp_name").text(employeeData.employee_name);
$("#emp_age").text(employeeData.employee_age);
$("#emp_salary").text(employeeData.employee_salary);
$("#records").show();
} else {
$("#heading").hide();
$("#records").hide();
$("#no_records").show();
}
}
});
})
});
</script>


        <!-- header row -->
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h2 class="cat-heading">Banner</h2>
          </div>
          <div class="col-md-6 col-sm-12">
            <p> <a href="" class="setting_add">Add</a> &nbsp;/ &nbsp;<a href="all_featured.php" class="setting_edit">All
                Banners</a> </p>
          </div>
        </div>


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


 



 

</body>

</html>