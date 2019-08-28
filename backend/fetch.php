<?php
/** 
include('db.php');
include('function.php'); 
$output = array();

$product_block_id2 = 1; 
if(isset($product_block_id2))
{
$query = "SELECT * FROM all_products WHERE block_id = $product_block_id2";
}




  
  
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$cover = '';
	if($row["cover"] != '')
	{
		$cover = '<img src="upload/'.$row["cover"].'" class="img-thumbnail" width="50" height="35" />';
	}
	else
	{
		$cover = '';
	}
	$sub_array = array();
	$sub_array[] = $cover;
	$sub_array[] = $row["title"];
	$sub_array[] = $row["descpt"];
	//$sub_array[] = $row["price"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
	$data[] = $sub_array;
} 


$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output); 

****/
?>

