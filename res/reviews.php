<?php 

$q = "SELECT * FROM reviews ORDER BY id DESC LIMIT 3";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title']; 
$cover =  $data['cover'];   
$descpt = $data['descpt']; 
$date = $data['date'];


?> 



<!-- Reviews Slider Item -->
<!-- LIMIT TO 6 -->
<div class="owl-item">
    <div class="review d-flex flex-row align-items-start justify-content-start">
        <div>
            <div class="review_image"><img src="backend/assets/posted_images/<?php echo $cover; ?>" alt=""></div>
        </div>
        <div class="review_content">
            <div class="review_name"><?php echo $title; ?></div>
            <div class="review_rating_container">
                <div class="rating_r rating_r_4 review_rating">
                    <i></i><i></i><i></i><i></i><i></i></div>
                <div class="review_time">Posted on  <?php echo $date; ?></div>
            </div>
            <div class="review_text">
                <p><?php echo $descpt; ?></p>
            </div>
        </div>
    </div>
</div>
<?php } ?>
