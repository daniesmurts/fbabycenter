<?php
session_start(); 
        if(!(isset($_SESSION['username']))){
             header("location:index.php");
        }
?>

<?php include("misc/db.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FbabyCenter </title>

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- DataTables CSS -->   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

    <!-- Custom CSS --> 
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- FontAwesome CSS -->   
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

    <!-- FontAwesome JS -->   
    <script src="https://kit.fontawesome.com/6d64fe8c14.js"></script>
        
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->


</head>

<body>

  <?php include("assets/includes/navbar.php"); ?>
  <div class="container-fluid main-container">
    <div class="row">

      <!------------------- LEFT SIDE ---------------------------->
      <div class="col-lg-2 col-md-2 col-sm-12 aside">
        <?php include("assets/includes/aside.php"); ?>
      </div>


      <!------------------- RIGHT SIDE ---------------------------->
      <div class="col-lg-10 col-md-10 col-sm-12">

          <?php include("assets/includes/alert_msg.php"); ?>

            <!------- Form or Table Area ------>

             <?php 
             if (isset($_GET['page'])){

            $page = $_GET['page']; 

            if($page=add_p){include("misc/add_p.php");}

            }else{
                $errMSG = "Sorry, No page selected";
            }
        
            ?>
             
             
            <!------End Form  or Table Area ---->
      </div>




        </div>

    </div> 




<!----------- SCRIPT ZONE --------------->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

  <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>


    <!-- SCRIPT FOR PAGINATION -->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" ></script>   
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>



<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    -->


 
  
</body>

</html>