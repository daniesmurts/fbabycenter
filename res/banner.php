<div class="banner">
	<div class="banner_background" style="background-image:url(images/baby2.jpg)"></div>
	<div class="container fill_height">
		<div class="row fill_height">

			<?php 
$block_id = 1;
$q = "SELECT * FROM all_products WHERE block_id = $block_id  ORDER BY id DESC LIMIT 1";    
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title']; 
$cover =  $data['cover']; 
$name_of_promotion =  $data['descpt']; 
$new_price =  $data['new_price']; 
$old_price =  $data['price']; 


?>

			<div class="banner_product_image"><img src="backend/upload/<?php echo $cover; ?>" alt="">
			</div>

			<div class="col-lg-5 offset-lg-4 fill_height">
				<div class="banner_content">
					<h1 class="banner_text"><?php echo $name_of_promotion; ?></h1>
					<div class="banner_price"><span>UGX <?php echo $old_price; ?></span>UGX <?php echo $new_price; ?>
					</div>
					<div class="banner_product_name"><?php echo $title; ?></div>
					<div class="button banner_button Callen-Lorde-4-hex"><a href="tel:+256-782-348-064">Shop Now</a></div>
				</div>
			</div>
<?php } ?>
		</div>
	</div>
</div>