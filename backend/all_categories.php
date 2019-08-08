<?php
session_start(); 
        if(!(isset($_SESSION['username']))){
             header("location:index.php");
        }
 
  require_once 'assets/includes/connexion.php';
  
  if(isset($_GET['delete_id'])){
  $delete_id = $_GET['delete_id'];
  $sql="DELETE FROM categories WHERE id = $delete_id";
  $req = mysqli_query($dbc, $sql); 
  
  if($req){
    $successMSG = "Data was succesfuly deleted ...";
    //header("refresh:2 ; all_categories.php");
    header("location:all_categories.php");
       }
      else
      {
        $errMSG = "Sorry, an error occured. Data was not deleted...";
        header("refresh:2 ; all_categories.php");
      }
   
    }		
						 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>All Cateories</title>
  <!-- fonts -->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/6d64fe8c14.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
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
    <?php include("assets/includes/aside.php"); ?>
    <!-- page content -->
    <div id="content">
      <?php include("assets/includes/navbar.php"); ?>
      <div class="container">
        <!-- header row -->
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <h2 class="cat-heading">Featured</h2>
          </div>
          <div class="col-md-6 col-sm-12">
            <p> <a href="" class="setting_add">Add</a> &nbsp;/ &nbsp;<a href="all_featured.php" class="setting_edit">All
                featured</a> </p>
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

            <div class="card">
              <div class="card-body">

                <table class="table table-sm table-striped table-hover thead-light text-left">

                  <thead>
                    <tr>
                      <th>№</th>
                      <th>Categories </th>
                      <th>Descriptions</th>
                      <th colspan="2" class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php                       
            require_once 'assets/includes/connexion.php';
            $q = "SELECT * FROM categories ORDER BY title ASC ";                
            $r = mysqli_query($dbc,$q); 
            while ($data = mysqli_fetch_array($r)){ 
                $id= $data['id']; 
            $title = $data['title']; 
            $descpt = $data['descpt']; 
            $count ++;
              ?>


                    <tr id='<?php echo $id; ?>'>
                      <td> <?php echo $count; ?></td>
                      <td><?php echo $title; ?></td>

                      <td><?php echo $descpt; ?></td>
                      <td><a href="edit_category.php?edit_id=<?php echo $id; ?>" class="edit_icon"><i
                            class="fas fa-edit  fa-green" aria-hidden="true"></i> </a> </td>
                      <td><a href="javascript:delete_data(<?php echo $data['id']; ?>)" class="delete_icon"><i
                            class="fas fa-trash fa-red" aria-hidden="true"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <!---------- PAGINATION SYSTEM ---------------------->
                <nav aria-label="Page navigation">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" tabindex="-1" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">First</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Last</span>
                      </a>
                    </li>
                  </ul>
                </nav>



	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<!-- tether -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
	<!-- bootstrap -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
	<!-- Popper -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<!-- jQuery Custom Scroller CDN -->
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
	</script>

	<script type="text/javascript">
	  $(document).ready(function () {
	    $("#sidebar").mCustomScrollbar({
	      theme: "minimal"
	    });

	    $('#sidebarCollapse').on('click', function () {
	      $('#sidebar, #content').toggleClass('active');
	      $('.collapse.in').toggleClass('in');
	      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
	    });
	  });
	</script>

	<script type="text/javascript">
	  function delete_data(id) {
	    if (confirm('Sure To Remove This Record ?')) {
	      window.location.href = 'all_categories.php?delete_id=' + id;
	    }
	  }
	</script>



</body>

</html>