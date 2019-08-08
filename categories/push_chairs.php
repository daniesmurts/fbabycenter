<!DOCTYPE html>
<html lang="en">
<head>
<title>Clothes</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../styles/shop_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/shop_responsive.css">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
					<?php include('../res/topbar.php') ?>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
						<?php include('../res/logo.php') ?>
						</div>
					</div>

					<!-- Search -->
					<?php include('../res/search.php') ?>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<!-- <div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="images/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
									<div class="wishlist_count">115</div>
								</div>
							</div> -->

							<!-- Cart -->
							<!-- <div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Cart</a></div>
										<div class="cart_price">$85</div>
									</div>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							<div class="cat_menu_container">
							<?php include('../res/categories.php') ?>
							</div>

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
							<?php include('../res/mainnav.php') ?>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
					<?php include('../res/menu.php') ?>
						
					</div>
				</div>
			</div>
		</div>

	</header>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Clothes</h2>
		</div>
	</div>

	<!-- Shop -->

	<div class="shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">

					<!-- Shop Sidebar -->
					<div class="shop_sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">Categories</div>
							<?php include('../res/shop_sidebar.php') ?>
						</div>
						<div class="sidebar_section filter_by_section">
							<div class="sidebar_title">Filter By</div>
							<div class="sidebar_subtitle">Price</div>
							<div class="filter_price">
								<div id="slider-range" class="slider_range"></div>
								<p>Range: </p>
								<p><input type="text" id="amount" class="amount" readonly style="border:0; font-weight:bold;"></p>
							</div>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle color_subtitle">Color</div>
							<ul class="colors_list">
								<li class="color"><a href="#" style="background: #b19c83;"></a></li>
								<li class="color"><a href="#" style="background: #000000;"></a></li>
								<li class="color"><a href="#" style="background: #999999;"></a></li>
								<li class="color"><a href="#" style="background: #009688;"></a></li>
								<li class="color"><a href="#" style="background: #df3b3b;"></a></li>
								<li class="color"><a href="#" style="background: #ffffff; border: solid 1px #e1e1e1;"></a></li>
							</ul>
						</div>
						<div class="sidebar_section">
							<div class="sidebar_subtitle brands_subtitle">Brands</div>
							<?php include('../res/brandlists_sidebar.php') ?>
						</div>
					</div>

				</div>

				<div class="col-lg-9">
					
					<!-- Shop Content -->

					<div class="shop_content">
						<div class="shop_bar clearfix">
							<div class="shop_product_count"><span>186</span> products found</div>
							<div class="shop_sorting">
								<span>Sort by:</span>
								<ul>
									<li>
										<span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
										<ul>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
											<li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
											<li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>

						<div class="product_grid">
							<div class="product_grid_border"></div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_5.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Philips BT6900A</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item discount">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225<span>$300</span></div>
									<div class="product_name"><div><a href="#" tabindex="0">Huawei MediaPad...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_2.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Apple iPod shuffle</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_3.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Sony MDRZX310W</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_4.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">LUNA Smartphone</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/shop_1.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon IXUS 175...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379<span>$300</span></div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon STM Kit...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_6.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225<span>$300</span></div>
									<div class="product_name"><div><a href="#" tabindex="0">Samsung J330F</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_7.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Lenovo IdeaPad</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_8.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Digitus EDNET...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_1.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Astro M2 Black</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_2.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Transcend T.Sonic</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_3.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Xiaomi Band 2...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_4.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Rapoo T8 White</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item discount">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_1.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225<span>$300</span></div>
									<div class="product_name"><div><a href="#" tabindex="0">Huawei MediaPad...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_6.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Nokia 3310 (2017)</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_7.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Rapoo 7100p Gray</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/new_8.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon EF</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/shop_2.jpg" alt=""></div>
								<div class="product_content">
									<div class="product_price">$225</div>
									<div class="product_name"><div><a href="#" tabindex="0">Gembird SPK-103</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

							<!-- Product Item -->
							<div class="product_item is_new">
								<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/featured_5.png" alt=""></div>
								<div class="product_content">
									<div class="product_price">$379</div>
									<div class="product_name"><div><a href="#" tabindex="0">Canon STM Kit...</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">-25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

						</div>

						<!-- Shop Page Navigation -->

						<div class="shop_page_nav d-flex flex-row">
							<div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
							<ul class="page_nav d-flex flex-row">
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">...</a></li>
								<li><a href="#">21</a></li>
							</ul>
							<div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Recently Viewed -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">New Arrivals</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<?php include('../res/recently_viewed.php') ?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Brands -->

	<div class="brands">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="brands_slider_container">
						
						<!-- Brands Slider -->

						<div class="owl-carousel owl-theme brands_slider">
							
							<?php include ('../res/brands.php') ?>

						</div>
						
						<!-- Brands Slider Navigation -->
						<div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
						<div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
								<button class="newsletter_button">Subscribe</button>
							</form>
							<div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<?php include('../res/footer.php') ?>

	<!-- Copyright -->

	<?php include('../res/cr.php') ?>
</div>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/shop_custom.js"></script>
</body>

</html>