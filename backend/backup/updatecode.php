<?php 

require_once 'assets/includes/connexion.php';
							
								
								
	if(isset($_POST['updatedata'])){
	    
	    $id = $_POST['update_id']; 

        $categ_id = mysqli_real_escape_string($dbc, $_POST['categ_id']);
        $title = mysqli_real_escape_string($dbc, $_POST['title']);  
        $price = mysqli_real_escape_string($dbc, $_POST['price']); 
        $descpt = mysqli_real_escape_string($dbc, $_POST['descpt']); 
        $color = mysqli_real_escape_string($dbc, $_POST['color']);  
        $size = mysqli_real_escape_string($dbc, $_POST['size']); 
        $quantity = mysqli_real_escape_string($dbc, $_POST['quantity']);
        $available = mysqli_real_escape_string($dbc, $_POST['available']); 
        $discount = mysqli_real_escape_string($dbc, $_POST['discount']); 
        $new = mysqli_real_escape_string($dbc, $_POST['new']); 
    
        
        include("assets/includes/upload_check.php"); 
        include("assets/includes/upload_check_2.php");
        include("assets/includes/upload_check_3.php");
        
        $query = "UPDATE products SET categ_id='$categ_id', title='$title', price='$price', descpt='$descpt', color='$color', size='$size', quantity='$quantity', available='$available', discount='$discount', new='$new', cover='$cover', cover2='$cober2', cover3='$cover3' WHERE id='$id' ";  
        $query_run = mysqli_query($dbc, $query);
        
        
        if($query_run){
            $successMSG = "Data was succesfuly updated ...";
			header("refresh:2 ; products.php");
        }else{
            $successMSG = "An error occured! Data was not updated ...";
			header("refresh:3 ; products.php");
        }


    }

?>