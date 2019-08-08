<div class="featured_slider slider">

<?php 

$q = "SELECT * FROM on_sales LIMIT 16";            
$r = mysqli_query($dbc,$q);
$i = 0;
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title']; 
$cover =  $data['cover'];  
$color =  $data['color'];  
$new_price = $data['new_price']; 


?>
    <!-- Slider Item -->
    <div class="featured_slider_item">
        <div class="border_active"></div>
        <div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
            <div class="product_image d-flex flex-column align-items-center justify-content-center">
                <img src="backend/assets/posted_images/<?php echo $cover; ?>" alt=""></div>
            <div class="product_content">
                <!-- <div class="product_price discount">$225<span>$300</span></div> -->
                <div class="product_price">UGX <?php echo $new_price; ?></div>
                <div class="product_name">
                    <div><a href="product.html"> <?php echo $title; ?></a></div>
                </div>
                <div class="product_extras">
                    <!-- <div class="product_color">
                        <input type="radio" checked name="product_color" style="background:#b19c83">
                        <input type="radio" name="product_color" style="background:#000000">
                        <input type="radio" name="product_color" style="background:#999999">
                    </div> -->
                    <a href="tel:" style="color:#ffffff"><button class="product_cart_button">order</button></a>
                </div>
            </div>
            <div class="product_fav"><i class="fas fa-heart"></i></div>
            <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
            </ul>
        </div>
    </div>

    <?php } ?>

								</div>