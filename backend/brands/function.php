<?php

function upload_cover()
{
	if(isset($_FILES["cover"]))
	{
		$extension = explode('.', $_FILES['cover']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = './upload/' . $new_name;
		move_uploaded_file($_FILES['cover']['tmp_name'], $destination);
		return $new_name;
	}
}

function get_cover_name($product_id)
{
	include('db.php');
	$statement = $connection->prepare("SELECT cover FROM brand WHERE id = '$product_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["cover"];
	}
}

function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM brand");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>