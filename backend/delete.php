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
		"DELETE FROM all_products WHERE id = :id"
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


if(isset($_POST["product_id"]))
{
	$cover2 = get_cover_name2($_POST["product_id"]);
	if($cover2 != '')
	{
		unlink("upload/" . $cover2);
	}
	$statement = $connection->prepare(
		"DELETE FROM all_products WHERE id = :id"
	);
	$result2 = $statement->execute(
		array(
			':id'	=>	$_POST["product_id"]
		)
	);
	
	if(!empty($result2))
	{
		echo 'Data 2 Deleted';
	}
}



if(isset($_POST["product_id"]))
{
	$cover3 = get_cover_name3($_POST["product_id"]);
	if($cover3 != '')
	{
		unlink("upload/" . $cover3);
	}
	$statement = $connection->prepare(
		"DELETE FROM all_products WHERE id = :id"
	);
	$result3 = $statement->execute(
		array(
			':id'	=>	$_POST["product_id"]
		)
	);
	
	if(!empty($result3))
	{
		echo 'Data 3 Deleted';
	}
}




?>