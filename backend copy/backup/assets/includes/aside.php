<div class="sidebar">
    <a href="/backend/home.php">
        <h4 class="ml-3">Home</h4>
    </a>
    <h4 class="ml-3">View</h4>
    <ul>
        <li><a href="/backend/all_categories.php">All categories</a></li>
    </ul>
    <h4 class="ml-3">Update</h4>
    <ul>
        <li><a href="/backend/add_category.php">Add A Category</a></li>
        <li><a href="/backend/add_product.php">Add Product</a></li>
        <li><a href="/backend/add_banner.php">Add A Promotion-1</a></li>
        <li><a href="/backend/add_banner2.php">Add A Promotion-2</a></li>
        <li><a href="/backend/add_best_seller.php">Add Best seller</a></li>
        <li><a href="/backend/add_deal_of_the_week.php">Add A Deal of the week</a></li>
        <li><a href="/backend/add_featured.php">Add Featured</a></li>
        <li><a href="/backend/add_best_rated.php">Add Best Rated</a></li>
        <li><a href="/backend/add_trend.php">Add Trend</a></li>
        <li><a href="/backend/add_advert.php">Add Advert</a></li>
        <li><a href="/backend/add_review.php">Add Latest reviewed</a></li>
        <li><a href="/backend/add_hot_deal.php">Add Hot Deal</a></li>
    </ul>
</div> 




<nav id="sidebar">
    <div class="sidebar-header">
        <h3 class="text-center">Florence Baby Centre LTD</h3>
    </div>

    <ul class="list-unstyled components">
        <h4 class="text-center">Welcome <?php echo  $_SESSION['username']; ?></h4>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">View</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li><a href="/backend/all_categories.php">All categories</a></li>

            </ul>
        </li>


        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Add / Update</a>
            <ul class="collapse list-unstyled" id="pageSubmenu"> 
                <li><a href="/backend/101/index.php">Add A Product</a></li>
            </ul>
        </li>

        
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Update</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li><a href="/backend/add_category.php">Add A Category</a></li>
                <li><a href="/backend/add_product.php">Add Product</a></li>
                <li><a href="/backend/add_banner.php">Add A Promotion-1</a></li>
                <li><a href="/backend/add_banner2.php">Add A Promotion-2</a></li>
                <li><a href="/backend/add_on_sales.php">Add On-Sale</a></li>
                <li><a href="/backend/add_best_seller.php">Add Best seller</a></li>
                <li><a href="/backend/add_deal_of_the_week.php">Add A Deal of the week</a></li>
                <li><a href="/backend/add_featured.php">Add Featured</a></li>
                <li><a href="/backend/add_best_rated.php">Add Best Rated</a></li>
                <li><a href="/backend/add_trend.php">Add Trend</a></li>
                <li><a href="/backend/add_advert.php">Add Advert</a></li>
                <li><a href="/backend/add_review.php">Add Latest reviewed</a></li>
                <li><a href="/backend/add_hot_deal.php">Add Hot Deal</a></li>
                <li><a href="/backend/add_brand.php">Add Brand</a></li>
            </ul>
        </li>  
        
    </ul>

    <ul class="list-unstyled CTAs">
        <li>
            <a href="#" class="download">Problem?</a>
        </li>
        <li>
        <a  class="download" href="logout.php">Logout</a>
        </li>
    </ul>
</nav>