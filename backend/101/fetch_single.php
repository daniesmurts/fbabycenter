<?php
include('db.php');
include('function.php');
if(isset($_POST["product_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM productz 
		WHERE id = '".$_POST["product_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["categ_id"] = $row["categ_id"];
		$output["title"] = $row["title"];

		$output["price"] = $row["price"];
		$output["descpt"] = $row["descpt"];


		$output["color"] = $row["color"];
		$output["size"] = $row["size"];
		$output["quantity"] = $row["quantity"];
		$output["available"] = $row["available"];
		$output["discount"] = $row["discount"];
		$output["newz"] = $row["new"]; 

		if($row["cover"] != '')
		{   
			$output['cover'] = '<img src="upload/'.$row["cover"].'" class="img-thumbnail" width="50" height="35" />
			<input type="hidden" name="hidden_product_cover" value="'.$row["cover"].'" />';
		}
		else
		{
			$output['cover'] = '<input type="hidden" name="hidden_product_cover" value="" />';
		}


		if($row["cover2"] != '')
		{   
			$output['cover2'] = '<img src="upload/'.$row["cover2"].'" class="img-thumbnail" width="50" height="35" />
			<input type="hidden" name="hidden_product_cover2" value="'.$row["cover2"].'" />';
		}
		else
		{
			$output['cover2'] = '<input type="hidden" name="hidden_product_cover2" value="" />';
		}
		
		
		if($row["cover3"] != '')
		{   
			$output['cover3'] = '<img src="upload/'.$row["cover3"].'" class="img-thumbnail" width="50" height="35" />
			<input type="hidden" name="hidden_product_cover3" value="'.$row["cover3"].'" />';
		}
		else
		{
			$output['cover3'] = '<input type="hidden" name="hidden_product_cover3" value="" />';
		}




	}
	echo json_encode($output);
}
?>