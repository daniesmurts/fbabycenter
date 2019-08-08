<!-- Trends Slider Item -->
<?php 

$q = "SELECT * FROM trends ORDER BY id DESC LIMIT 6";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title']; 
$cover =  $data['cover'];   
$descpt = $data['descpt']; 
$categ_id =  $data['categ_id'];   
$price = $data['price']; 


?> 
<!-- LIMIT TO 6 -->
<div class="owl-item">
    <div class="trends_item is_new">
        <div class="trends_image d-flex flex-column align-items-center justify-content-center">
            <img src="backend/assets/posted_images/<?php echo $cover; ?>" alt=""></div>
        <div class="trends_content">

            <?php
                    $q2 = "SELECT * FROM categories WHERE id=$categ_id ";    
                    $r2 = mysqli_query($dbc,$q2);
                    while ($data2 = mysqli_fetch_array($r2)){ 
                        $categ_id =  $data2['id']; 
                        $categ_title =  $data2['title']; 
                ?>
            <div class="trends_category"><a href="#"><?php echo $categ_title; ?></a></div>
                    <?php } ?>   
            <div class="trends_info clearfix">
                <div class="trends_name"><a href="product.html"><?php echo $title; ?></a></div>
                <div class="trends_price">UGX <?php echo $price; ?></div>
            </div>
        </div>
        <ul class="trends_marks">
            <li class="trends_mark trends_discount">-25%</li>
            <li class="trends_mark trends_new">new</li>
        </ul>
        <div class="trends_fav"><i class="fas fa-heart"></i></div>
    </div>
</div>
<?php } ?> 
