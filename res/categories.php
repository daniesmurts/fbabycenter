<div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
	<div class="cat_burger"><span></span><span></span><span></span></div>
	<div class="cat_menu_text">Categories</div>
</div>

<ul class="cat_menu">
	<div id="cats-container"></div>
	<script id="catsTemplate" type="text/x-handlebars-template">
		<ul class="sidebar_categories">
	{{#each this}}
	<li>{{name}} </li>
	{{/each}}
		<!-- <li><a href="shop.php?view=<?php echo $id; ?>"><?php echo $title; ?><i class="fas fa-chevron-right"></i></a>
		</li> -->

		
	</ul>
                            </script>
</ul>