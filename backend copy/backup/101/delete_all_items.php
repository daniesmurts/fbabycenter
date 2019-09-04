<?php

include('db.php');
include("function_all_items.php");

if(isset($_POST["product_id"]))
{
	$cover = get_cover_name($_POST["product_id"]);
	$cover2 = get_cover_name2($_POST["product_id"]);
    $cover3 = get_cover_name3($_POST["product_id"]);
    
	if($cover != '' OR $cover2 != '' OR $cover3 != '')
	{
		unlink("upload/" . $cover);
		unlink("upload/" . $cover2);
		unlink("upload/" . $cover3);
	}
	$statement = $connection->prepare(
		"DELETE FROM all_items WHERE id = :id"
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