<!DOCTYPE html>
<html lang="en">

<head>
	<title>Baby Centre</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Florence Baby Center">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">

</head>

<body>
	<?php  
require_once 'backend/assets/includes/connexion.php';
?>
	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<?php include('res/topbar.php') ?>
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
								<?php include('res/logo.php') ?>
							</div>
						</div>

						<!-- Search -->
						<?php include('res/search.php') ?>

						<!-- Wishlist -->


						<!-- Wishlist -->
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
									<?php include('res/categories.php') ?>
								</div>

								<!-- Main Nav Menu -->

								<div class="main_nav_menu ml-auto">
									<?php include('res/mainnav.php') ?>
								</div>

								<!-- Menu Trigger -->

								<div class="menu_trigger_container ml-auto">
									<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
										<div class="menu_burger">
											<div class="menu_trigger_text">menu</div>
											<div class="cat_burger menu_burger_inner">
												<span></span><span></span><span></span></div>
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
							<?php include('res/menu.php'); ?>

						</div>
					</div>
				</div>
			</div>

		</header>

		<!-- Banner -->

		<?php include ('res/banner.php'); ?>

		<!-- Characteristics -->

		<div class="characteristics">
			<div class="container">
				<div class="row">

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/delivery.svg" alt=""></div>
							<div class="char_content">
								<div class="char_title">Delivery</div>
								<div class="char_subtitle">In and around Kampala</div>
							</div>
						</div>
					</div>

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/return.svg" alt=""></div>
							<div class="char_content">
								<div class="char_title">Return Policy</div>
								<div class="char_subtitle">Upto 3 days</div>
							</div>
						</div>
					</div>

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/pay.svg" alt=""></div>
							<div class="char_content">
								<div class="char_title">Pay with</div>
								<div class="char_subtitle">Mobile money/Cash</div>
							</div>
						</div>
					</div>

					<!-- Char. Item -->
					<div class="col-lg-3 col-md-6 char_col">

						<div class="char_item d-flex flex-row align-items-center justify-content-start">
							<div class="char_icon"><img src="images/free.svg" alt=""></div>
							<div class="char_content">
								<div class="char_title">Free Delivery</div>
								<div class="char_subtitle">from UGX 350,000</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Deals of the week -->

		<div class="deals_featured">
			<div class="container">
				<div class="row">
					

						<!-- Deals -->

						<?php include ('res/deals.php') ?>

					

					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Featured</li>
									<li>On Sale</li>
									<li>Best Rated</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>

							<!-- Product featured Panel -->
							<div class="product_panel panel active">
								<?php include ('res/featured.php') ?>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product onsale Panel -->

							<div class="product_panel panel">
								<?php include ('res/onsale.php') ?>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product best-rated Panel -->

							<div class="product_panel panel">
								<?php include ('res/bestrated.php') ?>
								<div class="featured_slider_dots_cover"></div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular Categories -->

	<div class="popular_categories">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="popular_categories_content">
						<div class="popular_categories_title">Popular Categories</div>
						<div class="popular_categories_slider_nav">
							<div class="popular_categories_prev popular_categories_nav"><i
									class="fas fa-angle-left ml-auto"></i></div>
							<div class="popular_categories_next popular_categories_nav"><i
									class="fas fa-angle-right ml-auto"></i></div>
						</div>
						<div class="popular_categories_link"><a href="#">full catalog</a></div>
					</div>
				</div>

				<!-- Popular Categories Slider -->

				<div class="col-lg-9">
					<div class="popular_categories_slider_container">
						<div class="owl-carousel owl-theme popular_categories_slider">

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div
									class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_1.svg" alt=""></div>
									<div class="popular_category_text">Clothes</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div
									class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_2.svg" alt=""></div>
									<div class="popular_category_text">Toys</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div
									class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_3.svg" alt=""></div>
									<div class="popular_category_text">Carriers</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div
									class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_4.svg" alt=""></div>
									<div class="popular_category_text">Car seats</div>
								</div>
							</div>

							<!-- Popular Categories Item -->
							<div class="owl-item">
								<div
									class="popular_category d-flex flex-column align-items-center justify-content-center">
									<div class="popular_category_image"><img src="images/popular_5.svg" alt=""></div>
									<div class="popular_category_text">Furniture</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Banner -->

	<div class="banner_2">
		<div class="banner_2_background" style="background-image:url(images/banner_2_background.jpg)"></div>
		<div class="banner_2_container">
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->

			<div class="owl-carousel owl-theme banner_2_slider">
				<?php include ('res/banner2.php') ?>
			</div>
		</div>
	</div>

	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
			</div>
		</div>
	</div>
	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot Best Sellers</div>
							<ul class="clearfix">
								<li class="active">Top 20</li>
								<li>Toys</li>
								<li>Gifts</li>
							</ul>
							<div class="tabs_line"><span></span></div>
						</div>
						<div class="bestsellers_panel panel active">
							<!-- Best Sellers Slider -->
							<div class="bestsellers_slider slider">
								<?php include('res/best_seller_top20.php') ?>
							</div>
						</div>
						<div class="bestsellers_panel panel">
							<!-- Best Sellers Slider -->
							<div class="bestsellers_slider slider">
								<!-- Best Sellers Item -->
								<?php include('res/best_seller_toys.php') ?>
							</div>
						</div>
						<div class="bestsellers_panel panel">
							<!-- Best Sellers Slider -->
							<div class="bestsellers_slider slider">
								<!-- Best Sellers Item -->
								<?php include('res/best_seller_gifts.php') ?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Adverts -->

	<div class="adverts">
		<div class="container">
			<div class="row">

				<?php include ('res/advert.php') ?>

			</div>
		</div>
	</div>

	<!-- Trends -->

	<div class="trends">
		<div class="trends_background" style="background-image:url(images/trends_background.jpg)"></div>
		<div class="trends_overlay"></div>
		<div class="container">
			<div class="row">

				<!-- Trends Content -->
				<div class="col-lg-3">
					<div class="trends_container">
						<h2 class="trends_title">Trends 2019</h2>
						<div class="trends_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</p>
						</div>
						<div class="trends_slider_nav">
							<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
							<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
						</div>
					</div>
				</div>

				<!-- Trends Slider -->
				<div class="col-lg-9">
					<div class="trends_slider_container">

						<!-- Trends Slider -->

						<div class="owl-carousel owl-theme trends_slider">

							<?php include ('res/trends.php') ?>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Reviews -->

	<div class="reviews">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="reviews_title_container">
						<h3 class="reviews_title">Latest Reviews</h3>
						<div class="reviews_all ml-auto"><a href="#">view all <span>reviews</span></a></div>
					</div>

					<div class="reviews_slider_container">

						<!-- Reviews Slider -->
						<div class="owl-carousel owl-theme reviews_slider">

							<?php include ('res/reviews.php') ?>

						</div>
						<div class="reviews_dots"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Hot deals -->

	<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">HOT DEALS</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">

						<!-- HOt deals Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							<?php include ('res/hot_deals.php') ?>
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

							<?php include ('res/brands.php') ?>

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
					<div
						class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
						<div class="newsletter_title_container">
							<div class="newsletter_icon"><img src="images/send.png" alt=""></div>
							<div class="newsletter_title">Sign up for Newsletter</div>
							<div class="newsletter_text">
								<p>...and receive %20 coupon for first shopping.</p>
							</div>
						</div>
						<div class="newsletter_content clearfix">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" required="required"
									placeholder="Enter your email address">
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

	<?php include('res/footer.php') ?>

	<!-- Copyright -->

	<?php include('res/cr.php') ?>
	</div>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/slick-1.8.0/slick.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>