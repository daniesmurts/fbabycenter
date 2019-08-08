<!-- hot deals Item -->
<!-- LIMIT TO 6 -->



<?php 

$q = "SELECT * FROM hot_deals ORDER BY id DESC LIMIT 6";    
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title']; 
$cover =  $data['cover']; 
$discount =  $data['discount']; 
$new_price =  $data['new_price']; 
$old_price =  $data['old_price']; 


?>


<div class="owl-item">
	<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
		<div class="viewed_image"><img src="backend/assets/posted_images/<?php echo $cover; ?>" alt="">
		</div>
		<div class="viewed_content text-center">
			<div class="viewed_price">$<?php echo $new_price; ?><span>$<?php echo $old_price; ?></span>
			</div>
			<div class="viewed_name"><a href="#"><?php echo $title; ?></a></div>
		</div>
		<ul class="item_marks">
			<li class="item_mark item_discount">-<?php echo $discount; ?></li>
			<li class="item_mark item_new">new</li>
		</ul>
	</div>
</div>

<?php } ?>