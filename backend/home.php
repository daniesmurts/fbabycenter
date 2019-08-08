<?php
session_start(); 
if(!(isset($_SESSION['username']))){
     header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome</title>

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


  <?php include("assets/includes/navbar.php"); ?>

  <div class="container main-container">
    <div class="row container-title">
      <br />
      <div class="col-md-12 col-sm-12 text-center">
        <h2 class="cat-heading">Admin Panel</h2>
        <p></p>
      </div>
    </div>


    <div class="row text-center">
      <div class="col-md-3 col-sm-12">
        <div class="counter">
          <a href="/backend/all_categories.php" class="go_to">
            <i class="fas fa-th-list fa-2x"></i>
            <!-- <i class="fa fa-code fa-2x"></i> -->
            <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
            <p class="count-text "> Categories</p>
          </a>
        </div>
      </div>

      <div class="col-md-3 col-sm-12">
        <div class="counter">
          <a href="/backend/add_featured.php" class="go_to">
            <i class="fas fa-star fa-2x"></i>
            <h2 class="timer count-title count-number"></h2>
            <p class="count-text "> Featured </p>
          </a>
        </div>
      </div>

      <div class="col-md-3 col-sm-12">
        <div class="counter">
          <a href="/backend/add_on_sales.php" class="go_to">
            <i class="fas fa-percent fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
            <p class="count-text "> On sale </p>
          </a>
        </div>

      </div>

      <div class="col-md-3 col-sm-12">
        <div class="counter">
          <a href="/backend/add_best_rated.php" class="go_to">
            <i class="fas fa-thumbs-up fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
            <p class="count-text "> Best Rated</p>
          </a>
        </div>
      </div>
    </div>



    <div class="row text-center mt-4">

      <div class="col-md-3 col-sm-12">
        <div class="counter">
          <a href="/backend/add_deal_of_the_week.php" class="go_to">
            <i class="far fa-smile-beam fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
            <p class="count-text "> Deal of the week</p>
          </a>
        </div>
      </div>

      <div class="col-md-3 col-sm-12">
        <div class="counter">
          <a href="/backend/add_top_20" class="go_to">
            <i class="fas fa-level-up-alt fa-2x"></i>
            <h2 class="timer count-title count-number"></h2>
            <p class="count-text "> Top 20 </p>
          </a>
        </div>
      </div>

      <div class="col-md-3 col-sm-12">
        <div class="counter">
          <a href="/backend/add_gifts" class="go_to">
            <i class="fa fa-bookmark-o fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
            <p class="count-text "> Gifts</p>
          </a>
        </div>

      </div>

      <div class="col-md-3 col-sm-12">
        <div class="counter">
          <a href="#" class="go_to">
            <i class="fa fa-bookmark-o fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
            <p class="count-text "> Administrators</p>
          </a>
        </div>

      </div>

    </div>


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
     <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

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


</body>

</html>