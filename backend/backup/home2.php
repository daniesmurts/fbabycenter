




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add </title>
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

		<!-- Bootstrap DataTable CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">

</head>

<body>

	<div class="wrapper">
		<!-- sidebar -->
		<!-- <div class="sidebar">
    <a href="/backend/home.php">
        <h4 class="ml-3">Home</h4>
    </a>
    <h4 class="ml-3">View</h4>
    <ul>
        <li><a href="/backend/all_categories.php">All categories</a></li>
    </ul>
    <h4 class="ml-3">Update</h4>
    <ul>
        <li><a href="/backend/add_category.php">Add A Category</a></li>
        <li><a href="/backend/add_product.php">Add Product</a></li>
        <li><a href="/backend/add_banner.php">Add A Promotion-1</a></li>
        <li><a href="/backend/add_banner2.php">Add A Promotion-2</a></li>
        <li><a href="/backend/add_best_seller.php">Add Best seller</a></li>
        <li><a href="/backend/add_deal_of_the_week.php">Add A Deal of the week</a></li>
        <li><a href="/backend/add_featured.php">Add Featured</a></li>
        <li><a href="/backend/add_best_rated.php">Add Best Rated</a></li>
        <li><a href="/backend/add_trend.php">Add Trend</a></li>
        <li><a href="/backend/add_advert.php">Add Advert</a></li>
        <li><a href="/backend/add_review.php">Add Latest reviewed</a></li>
        <li><a href="/backend/add_hot_deal.php">Add Hot Deal</a></li>
    </ul>
</div> -->




<nav id="sidebar">
    <div class="sidebar-header">
        <h3 class="text-center">Florence Baby Centre LTD</h3>
    </div>

    <ul class="list-unstyled components">
        <h4 class="text-center">Welcome Daniel</h4>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">View</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li><a href="/backend/all_categories.php">All categories</a></li>

            </ul>
        </li>

        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Update</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="/backend/add_category.php">Add A Category</a></li>
                <li><a href="/backend/add_product.php">Add Product</a></li>
                <li><a href="/backend/add_banner.php">Add A Promotion-1</a></li>
                <li><a href="/backend/add_banner2.php">Add A Promotion-2</a></li>
                <li><a href="/backend/add_on_sales.php">Add On-Sale</a></li>
                <li><a href="/backend/add_best_seller.php">Add Best seller</a></li>
                <li><a href="/backend/add_deal_of_the_week.php">Add A Deal of the week</a></li>
                <li><a href="/backend/add_featured.php">Add Featured</a></li>
                <li><a href="/backend/add_best_rated.php">Add Best Rated</a></li>
                <li><a href="/backend/add_trend.php">Add Trend</a></li>
                <li><a href="/backend/add_advert.php">Add Advert</a></li>
                <li><a href="/backend/add_review.php">Add Latest reviewed</a></li>
                <li><a href="/backend/add_hot_deal.php">Add Hot Deal</a></li>
                <li><a href="/backend/add_brand.php">Add Brand</a></li>
            </ul>
        </li>
        
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="#" class="download">Problem?</a>
        </li>
        <li>
        <a  class="download" href="logout.php">Logout</a>
        </li>
    </ul>
</nav>		<!-- page content -->
		<div id="content">
			  <!-- <nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse ">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <a class="navbar-brand" href="home.php">Florence Baby Centre LTD</a>

  <div class="collapse navbar-collapse" id="navbar"> 
    <div class="navbar-nav mx-auto">   
          <li class="nav-item">
            <a class="nav-link welcome" href="#"> Welcome Daniel !</a>
          </li>  
    </div> 
 

    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
    <img  width="60" height="60"  class="rounded-circle" src="assets/posted_images">
                                
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="logout.php">Sign out</a> 
        </div>
      </li>
    </ul> 


  </div>
</nav> -->






			<nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info3">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">.</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">.</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


			<div class="container">

					<!------Table Aera ----------->

						<?php include("products_table.php"); ?>

					<!------End Table Aera ----------->
			</div> <!------End Container ----------->

				 
		</div> <!------End Div Content ----------->
	</div> <!------End Div Wrapper ----------->



	<!-- Modal -->

		<?php include("insert_update_modal.php"); ?>

	<!---End Modal---->





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