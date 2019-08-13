<?php
include('db.php');
include('function.php');
if(isset($_POST["product_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM productss 
		WHERE id = '".$_POST["product_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["name"] = $row["name"];
		$output["descpt"] = $row["descpt"];
		if($row["picture"] != '')
		{
			$output['picture'] = '<img src="upload/'.$row["picture"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_product_picture" value="'.$row["picture"].'" />';
		}
		else
		{
			$output['picture'] = '<input type="hidden" name="hidden_product_picture" value="" />';
		}
	}
	echo json_encode($output);
}
?>