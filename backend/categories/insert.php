<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
	   

		$statement = $connection->prepare("
			INSERT INTO categories (title, descpt) 
			VALUES (:title, :descpt)
		");
		$result = $statement->execute(
			array(
				':title'	=>	$_POST["title"],
				':descpt'	=>	$_POST["descpt"] 
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}else{echo 'Data Was not Inserted';}
	}

	
	if($_POST["operation"] == "Edit")
	{
		 
		$statement = $connection->prepare(
			"UPDATE categories  SET title = :title, descpt = :descpt WHERE id = :id"
		);
		$result = $statement->execute(
			array(
				':title'	=>	$_POST["title"],
				':descpt'	=>	$_POST["descpt"], 
				':id'			=>	$_POST["product_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>