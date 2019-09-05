<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM categories ";
$i = 0;
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

	$i++;
	 
	$sub_array = array();
	$sub_array[] = $i;
	$sub_array[] = $row["title"];
	$sub_array[] = $row["descpt"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-info2 btn-xs update"><i
	class="fas fa-edit fa-2x"></i></button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-info-red btn-xs delete"><i class="fas fa-trash-alt fa-2x"></i></button>';
	$data[] = $sub_array;





}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>