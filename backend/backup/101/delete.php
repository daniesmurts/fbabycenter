<?php

include('db.php');
include("function.php");

if(isset($_POST["product_id"]))
{
	$picture = get_picture_name($_POST["product_id"]);
	if($picture != '')
	{
		unlink("upload/" . $picture);
	}
	$statement = $connection->prepare(
		"DELETE FROM productss WHERE id = :id"
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