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

function upload_cover2()
{
	if(isset($_FILES["cover2"]))
	{
		$extension2 = explode('.', $_FILES['cover2']['name']);
		$new_name2 = rand() . '.' . $extension2[1];
		$destination2 = './upload/' . $new_name2;
		move_uploaded_file($_FILES['cover2']['tmp_name'], $destination2);
		return $new_name2;
	}


}


function upload_cover3()
{
	if(isset($_FILES["cover3"]))
	{
		$extension3 = explode('.', $_FILES['cover3']['name']);
		$new_name3 = rand() . '.' . $extension3[1];
		$destination3 = './upload/' . $new_name3;
		move_uploaded_file($_FILES['cover3']['tmp_name'], $destination3);
		return $new_name3;
	}


}

function get_cover_name($product_id)
{
	include('db.php');
	$statement = $connection->prepare("SELECT cover FROM productz WHERE id = '$product_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["cover"];
	}
}


function get_cover_name2($product_id)
{
		include('db.php');
	$statement = $connection->prepare("SELECT cover2 FROM productz WHERE id = '$product_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["cover2"];
	}
}

function get_cover_name3($product_id)
{
		include('db.php');
	$statement = $connection->prepare("SELECT cover3 FROM productz WHERE id = '$product_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["cover3"];
	}
}

function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM productz");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>