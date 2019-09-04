<?php
include('db.php');
include('function_all_items.php');
$query = '';
$output = array();
$sub_categ_id = $_POST["sub_categ_id"];
$query .= "SELECT * FROM all_items WHERE sub_category ='$sub_categ_id' ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE title LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR descpt LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
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
	$sub_array[] = '<i name="update" id="'.$row["id"].'" class ="fas fa-edit  fa-2x fa-green update text-center" aria-hidden=true></i>';
	$sub_array[] = '<i name="delete" id="'.$row["id"].'" class ="fas fa-trash  fa-2x fa-red delete text-center" aria-hidden=true></i>';
	$data[] = $sub_array;
}


// <button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>
//<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>

$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>