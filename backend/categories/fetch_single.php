<?php
include('db.php');
include('function.php');
if(isset($_POST["product_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM categories 
		WHERE id = '".$_POST["product_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["title"] = $row["title"];
		$output["descpt"] = $row["descpt"];
		 
	}
	echo json_encode($output);
}
?>