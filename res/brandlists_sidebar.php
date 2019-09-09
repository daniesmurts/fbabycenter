<?php 

$q = "SELECT * FROM brand ORDER BY id DESC LIMIT 6";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){  
$title =  $data['title'];  


?>


<ul class="brands_list">
	<li class="brand"><a href="#"><?php echo $title; ?></a></li>

</ul>
<?php } ?>