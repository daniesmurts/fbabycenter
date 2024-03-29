<div class="shop_content">
    <div class="shop_bar clearfix">

    <?php 

require_once 'backend/assets/includes/connexion.php';
if(isset($_GET['view'])){  
    $i = 0;
$categ_id =  $_GET['view'];     
$q = "SELECT * FROM products WHERE categ_id = $categ_id ORDER BY id DESC";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$id = $data['id'];   
$i++;
}
?>



        <div class="shop_product_count"><span><?php echo $i; ?></span> products found</div>
<?php }?>   
<div class="shop_sorting">
            <span>Sort by:</span>
            <ul>
                <li>
                    <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
                    <ul>
                        <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest
                            rated</li>
                        <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                        <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "price" }'>price</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="product_grid">
        <div class="product_grid_border"></div>

<?php 

require_once 'backend/assets/includes/connexion.php';
if(isset($_GET['view'])){  
$categ_id =  $_GET['view'];     
$q = "SELECT * FROM all_products WHERE categ_id = $categ_id ORDER BY id DESC";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title'];  
$id = $data['id'];   
$cover = $data['cover'];   
$price = $data['price'];  
$discount = $data['discount'];  

?>



        <!-- Product Item -->
        <div class="product_item">
            <div class="product_border"></div>
            <div class="product_image d-flex flex-column align-items-center justify-content-center mb-2"><img
                    src="backend/upload/<?php echo $cover; ?>" alt=""></div>
            <div class="product_content">
                <div class="product_price">UGX <?php echo $price; ?></div>
                <div class="product_name">
                    <div><a href="product.php?details=<?php echo $id; ?>" tabindex="0"><?php echo $title; ?></a></div>
                </div>
            </div>
            <div class="product_fav"><i class="fas fa-heart"></i></div>
            <ul class="product_marks">
                <li class="product_mark product_discount">-<?php echo $discount; ?></li>
                <li class="product_mark product_new">new</li>
            </ul>
        </div>
<?php } }?>
    </div>
    <!-- Shop Page Navigation -->
    <div class="shop_page_nav d-flex flex-row">
        <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i
                class="fas fa-chevron-left"></i></div>
        <ul class="page_nav d-flex flex-row">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">21</a></li>
        </ul>
        <div class="page_next d-flex flex-column align-items-center justify-content-center"><i
                class="fas fa-chevron-right"></i></div>
    </div>

</div>