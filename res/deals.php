<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
	<div class="deals">
		<div class="deals_title">Deals of the Week</div>
		<div class="deals_slider_container">

			<!-- Deals Slider -->
			<div class="owl-carousel owl-theme deals_slider">

				<?php 

require_once 'backend/assets/includes/connexion.php';
$q = "SELECT * FROM all_products  WHERE block_id='5'  LIMIT 3";            
$r = mysqli_query($dbc,$q); 
while ($data = mysqli_fetch_array($r)){ 

$title = $data['title']; 
$cover =  $data['cover'];
$category_id = $data['categ_id'];
$old_price = $data['price']; 
$new_price = $data['new_price']; 
$quantity  = $data['quantity']; 
$sold  = $data['available']; 

// $q2 = "SELECT title FROM categories WHERE id=$category_id";                
// $r2 = mysqli_query($dbc,$q2);
// while ($data2 = mysqli_fetch_array($r2)){ 

// $category_title = $data2['title']; } 
?>
				<!-- Deals Item -->
				<div class="owl-item deals_item">
					<div class="deals_image"><img src="backend/upload/<?php echo $cover; ?>" alt=""></div>
					<div class="deals_content">
						<div class="deals_info_line d-flex flex-row justify-content-start">
							<div class="deals_item_category"><a href="#"><?php echo $category_title; ?></a></div>
							<div class="deals_item_price_a ml-auto">UGX <?php echo $old_price; ?></div>
						</div>
						<div class="deals_info_line d-flex flex-row justify-content-start">
							<div class="deals_item_name"><?php echo $title; ?></div>
							<div class="deals_item_price ml-auto">UGX <?php echo $new_price; ?></div>
						</div>
						<div class="available">
							<div class="available_line d-flex flex-row justify-content-start">
								<div class="available_title">Available: <span><?php echo $quantity; ?></span></div>
								<div class="sold_title ml-auto">Already sold: <span><?php echo $sold; ?></span></div>
							</div>
							<div class="available_bar"><span style="width:17%"></span></div>
						</div>
						<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
							<div class="deals_timer_title_container">
								<div class="deals_timer_title">Hurry Up</div>
								<div class="deals_timer_subtitle">Offer ends in:</div>
							</div>
							<div class="deals_timer_content ml-auto">
								<div class="deals_timer_box clearfix" data-target-time="">
									<div class="deals_timer_unit">
										<div id="deals_timer3_hr" class="deals_timer_hr"></div>
										<span>hours</span>
									</div>
									<div class="deals_timer_unit">
										<div id="deals_timer3_min" class="deals_timer_min"></div>
										<span>mins</span>
									</div>
									<div class="deals_timer_unit">
										<div id="deals_timer3_sec" class="deals_timer_sec"></div>
										<span>secs</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>

		<div class="deals_slider_nav_container">
			<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
			<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
		</div>
	</div>