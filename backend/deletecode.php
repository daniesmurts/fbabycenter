<?php 

require_once 'assets/includes/connexion.php';
								
	if(isset($_POST['deletedata'])){ 
	    
	    $id = $_POST['delete_id'];  
        
        $query = "DELETE FROM products WHERE id='$id'";
        $query_run = mysqli_query($dbc, $query);
        
        
        if($query_run){
            $successMSG = "Data was succesfuly deleted ...";
			header("refresh:2 ; products.php");
        }else{
            $successMSG = "An error occured! Data was not deleted ...";
			header("refresh:3 ; products.php");
        }


    }

?>
