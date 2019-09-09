<?php 

$q = "SELECT * FROM all_products  WHERE block_id='14'  ORDER BY id DESC LIMIT 3";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title']; 
$cover =  $data['cover'];   
$descpt = $data['descpt']; 


?> 

				<div class="col-lg-4 advert_col">
                    <div class="advert d-flex flex-row align-items-center justify-content-start">
                        <div class="advert_content">
                            <div class="advert_title"><a href="#"><?php echo $title; ?></a></div>
                            <div class="advert_text"><?php echo $descpt; ?></div>
                        </div>
                        <div class="ml-auto">
                            <div class="advert_image"><img src="backend/upload/<?php echo $cover; ?>" alt=""></div>
                        </div>
                    </div>
				</div>          
<?php } ?>                