<?php 

$q = "SELECT * FROM brand ORDER BY id DESC LIMIT 6";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){  
$cover =  $data['cover'];  


?> 


<div class="owl-item">
	<!-- LIMIT TO 6 -->
	<div class="brands_item d-flex flex-column justify-content-center"><img src="backend/brands/upload/<?php echo $cover; ?>" alt=""></div>
</div>
<?php } ?>