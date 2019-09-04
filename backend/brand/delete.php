<?php

include('db.php');
include("function.php");

if(isset($_POST["product_id"]))
{
	$cover = get_cover_name($_POST["product_id"]);
	if($cover != '')
	{
		unlink("upload/" . $cover);
	}
	$statement = $connection->prepare(
		"DELETE FROM brand WHERE id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["product_id"]
		)
	);
	
	if(!empty($result))
	{echo 'Data was succesfully Deleted';
	} 
}

 

 

?>