             <ul class="sidebar_categories">
                 <?php 

require_once 'backend/assets/includes/connexion.php';
$q = "SELECT * FROM categories ORDER BY title ASC";            
$r = mysqli_query($dbc,$q);
while ($data = mysqli_fetch_array($r)){ 
$title = $data['title'];  
$id = $data['id'];  

?>
                 <li><a href="shop.php?view=<?php echo $id; ?>"><?php echo $title; ?></a></li>
                 <?php } ?>
             </ul>