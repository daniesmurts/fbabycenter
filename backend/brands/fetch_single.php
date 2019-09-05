<?php
include('db.php');
include('function.php');
if(isset($_POST["product_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM brand 
		WHERE id = '".$_POST["product_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["title"] = $row["title"];
		$output["descpt"] = $row["descpt"];
		if($row["cover"] != '')
		{
			$output['cover'] = '<img src="upload/'.$row["cover"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_product_cover" value="'.$row["cover"].'" />';
		}
		else
		{
			$output['cover'] = '<input type="hidden" name="hidden_product_cover" value="" />';
		}
	}
	echo json_encode($output);
}
?>