<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="index.php">Home<i class="fas fa-chevron-down"></i></a></li>
									
									
									
									<li class="hassubs">
										<a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
										<ul>
				<?php
require_once 'backend/assets/includes/connexion.php';
                    $q2 = "SELECT * FROM super_deals ORDER BY id DESC LIMIT 5";    
                    $r2 = mysqli_query($dbc,$q2);
                    while ($data2 = mysqli_fetch_array($r2)){ 
                        $title =  $data2['title']; 
                        $id =  $data2['id']; 
				?> 
	<li><a href="super_deals.php?see=<?php echo $id; ?>"><?php echo $title; ?><i class="fas fa-chevron-down"></i></a></li>
					<?php } ?>							 
										</ul>
									</li>





									<li class="hassubs">
										<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
										<ul>
										<?php
                    $q = "SELECT * FROM brands ORDER BY id DESC LIMIT 5";    
                    $r = mysqli_query($dbc,$q2);
                    while ($data2 = mysqli_fetch_array($r2)){ 
                        $title =  $data['title']; 
                        $id =  $data['id']; 
				?> 						
				<li><a href="brands.php?see=<?php echo $id; ?>"><?php echo $title; ?><i class="fas fa-chevron-down"></i></a></li>
								<?php } ?>	
										</ul>
									</li>



									<!-- <li class="hassubs">
										<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li> -->
									<!-- <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li> -->
									<li><a href="contact.php">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>