<div class="single_product">
    <div class="container">
        <div class="row">

            <?php 

require_once 'backend/assets/includes/connexion.php';
if(isset($_GET['details'])){  
$product_id =  $_GET['details'];     
$q = "SELECT * FROM products WHERE id = $product_id";
 $r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title'];  
$categ_id = $data['categ_id'];
$cover = $data['cover'];
$cover2 = $data['cover2'];
$cover3 = $data['cover3'];
$descpt = $data['descpt'];
$price = $data['price'];
?>
            <!-- Images -->
            <div class="col-lg-2 order-lg-1 order-2">
                <ul class="image_list">
                    <li data-image="backend/assets/posted_images/<?php echo $cover ;?>"><img src="backend/assets/posted_images/<?php echo $cover ;?>" alt=""></li>
                    <li data-image="backend/assets/posted_images/<?php echo $cover2 ;?>"><img src="backend/assets/posted_images/<?php echo $cover2 ;?>" alt=""></li>
                    <li data-image="backend/assets/posted_images/<?php echo $cover3 ;?>"><img src="backend/assets/posted_images/<?php echo $cover3 ;?>" alt=""></li>
                </ul>
            </div>

            <!-- Selected Image -->
            <div class="col-lg-5 order-lg-2 order-1">
                <div class="image_selected"><img src="backend/assets/posted_images/<?php echo $cover ;?>" alt=""></div>
            </div>

            <!-- Description -->
            <div class="col-lg-5 order-3">
                <div class="product_description">

                <?php
                        
                    $q2 = "SELECT * FROM categories WHERE id = $categ_id";
                    $r2 = mysqli_query($dbc,$q2);
                    while ($data2 = mysqli_fetch_array($r2)){ 

                        $categ_title = $data2['title'];
                ?>
                    <div class="product_category"><?php echo $categ_title; ?></div>
             <?php } ?>

                    <div class="product_name"><?php echo $title; ?></div>
                    <div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class="product_text">
                        <p><?php echo $descpt; ?></p>
                    </div>
                    <div class="order_info d-flex flex-row">
                        <form action="#">
                            <div class="clearfix" style="z-index: 1000;">

                                <!-- Product Quantity -->
                                <div class="product_quantity clearfix">
                                    <span>Quantity: </span>
                                    <input id="quantity_input" type="text" pattern="[0-9]*" value="1">
                                    <div class="quantity_buttons">
                                        <div id="quantity_inc_button" class="quantity_inc quantity_control"><i
                                                class="fas fa-chevron-up"></i></div>
                                        <div id="quantity_dec_button" class="quantity_dec quantity_control"><i
                                                class="fas fa-chevron-down"></i></div>
                                    </div>
                                </div>

                                <!-- Product Color -->
                                <ul class="product_color">
                                    <li>
                                        <span>Color: </span>
                                        <div class="color_mark_container">
                                            <div id="selected_color" class="color_mark"></div>
                                        </div>
                                        <div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

                                        <ul class="color_list">
                                            <li>
                                                <div class="color_mark" style="background: #999999;"></div>
                                            </li>
                                            <li>
                                                <div class="color_mark" style="background: #b19c83;"></div>
                                            </li>
                                            <li>
                                                <div class="color_mark" style="background: #000000;"></div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>

                            <div class="product_price">UGX <?php echo $price; ?></div>
                            <div class="button_container">
                                <button type="button" class="button cart_button">Add to Cart</button>
                                <div class="product_fav"><i class="fas fa-heart"></i></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
                    <?php }}  ?>
        </div>
    </div>
</div>