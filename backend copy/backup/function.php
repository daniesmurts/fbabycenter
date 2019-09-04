<?php

function upload_picture()
{
	if(isset($_FILES["picture"]))
	{
		$extension = explode('.', $_FILES['picture']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = './upload/' . $new_name;
		move_uploaded_file($_FILES['picture']['tmp_name'], $destination);
		return $new_name;
	}
}

function get_picture_name($product_id)
{
	include('db.php');
	$statement = $connection->prepare("SELECT picture FROM productss WHERE id = '$product_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["picture"];
	}
}

function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM productss");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>