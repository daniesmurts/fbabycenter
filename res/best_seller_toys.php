
<?php 
$b_categ_id = 1;
/*$q = "SELECT * FROM best_sellers WHERE b_categ_id='$b_categ_id' ORDER BY id DESC LIMIT 12";   */

$q = "SELECT * FROM all_products  WHERE block_id='10'  ORDER BY id DESC LIMIT 12";  
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title']; 
$descpt =  $data['descpt']; 
$cover =  $data['cover']; 
$categ_id =  $data['categ_id'];   
$new_price =  $data['price'];
$old_price =  $data['old_price'];  
?>

<!-- Best Sellers Item -->
<div class="bestsellers_item discount">
    <div class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start">
        <div class="bestsellers_image"><img src="backend/upload/<?php echo $cover; ?>" alt=""></div>
        <div class="bestsellers_content">
        <?php
                    $q2 = "SELECT * FROM categories WHERE id=$categ_id";    
                    $r2 = mysqli_query($dbc,$q2);
                    while ($data2 = mysqli_fetch_array($r2)){ 
                        $categ_id =  $data2['categ_id']; 
                        $categ_title =  $data2['categ_title']; 
                ?>

            <div class="bestsellers_category"><a href="#"><?php echo $categ_title; ?></a></div>
                    <?php } ?>

            <div class="bestsellers_name"><a href="product.html"> <?php echo $title; ?></a>
            </div>
            <div class="rating_r rating_r_4 bestsellers_rating">
                <i></i><i></i><i></i><i></i><i></i></div>
            <div class="bestsellers_price discount">UGX <?php echo $new_price; ?><span><?php echo $old_price; ?></span></div>
        </div>
    </div>
    <div class="bestsellers_fav active"><i class="fas fa-heart"></i></div>
    <ul class="bestsellers_marks">
        <li class="bestsellers_mark bestsellers_discount">-25%</li>
        <li class="bestsellers_mark bestsellers_new">new</li>
    </ul>
</div>
<?php } ?>