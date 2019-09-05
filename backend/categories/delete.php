<?php

include('db.php');
include("function.php");

if(isset($_POST["product_id"]))
{
 
	$statement = $connection->prepare(
		"DELETE FROM categories WHERE id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["product_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data Deleted';
	}
}



?>