<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$cover = ''; 

		if($_FILES["cover"]["name"] != ''){
			$cover = upload_cover(); 
		}

		 
		

		

		$statement = $connection->prepare("
			INSERT INTO brand (title, descpt, cover) VALUES (:title, :descpt, :cover)
		");

		 
		$result = $statement->execute(
			array( 
				':title'	=>	$_POST["title"], 
				':descpt'	=>	$_POST["descpt"], 
				':cover'		=>	$cover 
			)
		);
		if(!empty($result))
		{ 
			 echo 'Data Inserted';
		}
	}


	if($_POST["operation"] == "Edit")
	{
		$cover = '';
		if($_FILES["cover"]["name"] != '')
		{
			$cover = upload_cover();
		}
		else
		{
			$cover = $_POST["hidden_product_cover"];
		}



		 


		$statement = $connection->prepare( 
"UPDATE brand SET  title = :title, descpt = :descpt, cover = :cover  WHERE id = :id");
		$result = $statement->execute(
			array( 
 
				':title'	=>	$_POST["title"], 
				':descpt'	=>	$_POST["descpt"], 
				':cover'		=>	$cover, 
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