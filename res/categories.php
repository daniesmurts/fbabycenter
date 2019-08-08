<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
									<div class="cat_burger"><span></span><span></span><span></span></div>
									<div class="cat_menu_text">Categories</div>
								</div>

								<ul class="cat_menu">
                               <!-- <li class="hassubs">
										<a href="../categories/new_arrivals.php">New Arrivals <i class="fas fa-chevron-right"></i></a>
										<ul>
											<li class="hassubs">
												<a href="../categories/clothes.php">Clothing<i class="fas fa-chevron-right"></i></a>
												<ul>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
													<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
												</ul>
											</li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
											<li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
										</ul>
									</li>
									
								-->
	<ul class="sidebar_categories">
                 <?php 

$q = "SELECT * FROM categories ORDER BY title ASC";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title'];  
$id = $data['id'];  

?>  
	 <li><a href="shop.php?view=<?php echo $id; ?>"><?php echo $title; ?><i class="fas fa-chevron-right"></i></a></li>
	 
<?php } ?>	 		
		</ul>