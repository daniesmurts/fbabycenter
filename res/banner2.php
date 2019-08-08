<!-- Banner 2 Slider Item -->

<?php 

$q = "SELECT * FROM banner2 ORDER BY id DESC LIMIT 3";    
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title']; 
$descpt =  $data['descpt']; 
$cover =  $data['cover']; 
$categ_id =  $data['categ_id']; 


?>

<div class="owl-item">
    <div class="banner_2_item">
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col-lg-4 col-md-6 fill_height">
                    <div class="banner_2_content">
                <?php
                    $q2 = "SELECT * FROM categories WHERE id=$categ_id ";    
                    $r2 = mysqli_query($dbc,$q2);
                    while ($data2 = mysqli_fetch_array($r2)){ 
                        $categ_id =  $data2['id']; 
                        $categ_title =  $data2['title']; 
                ?>
                        <div class="banner_2_category"><?php echo $categ_title; ?></div>

                    <?php } ?>
                        <div class="banner_2_title"><?php echo $title; ?></div>
                        <div class="banner_2_text"><?php echo $descpt; ?></div>
                        <div class="rating_r rating_r_4 banner_2_rating">
                            <i></i><i></i><i></i><i></i><i></i></div>
                        <div class="button banner_2_button"><a href="#">Explore</a></div>
                    </div>

                </div>
                <div class="col-lg-8 col-md-6 fill_height">
                    <div class="banner_2_image_container">
                        <div class="banner_2_image"><img src="backend/assets/posted_images/<?php echo $cover; ?>" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>