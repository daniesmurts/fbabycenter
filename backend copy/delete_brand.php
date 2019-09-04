<?php

include('db.php');
include("function.php");

if(isset($_POST["brand_id"]))
{
	$cover = get_cover_name($_POST["brand_id"]);
	if($cover != '')
	{
		unlink("upload/" . $cover);
	}
	$statement = $connection->prepare(
		"DELETE FROM brands WHERE id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["brand_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Data was succesfully Deleted';
	}
}




 

?>