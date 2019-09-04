<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$cover = '';
		$cover2 = '';
		$cover3 = '';

		if($_FILES["cover"]["name"] != ''){
			$cover = upload_cover(); 
		}

		if($_FILES["cover2"]["name"] != ''){
			$cover2 = upload_cover2(); 
		}


		if($_FILES["cover3"]["name"] != ''){
			$cover3 = upload_cover3(); 
		}

		

		

		$statement = $connection->prepare("
			INSERT INTO all_products (block_id, categ_id, title, price, new_price, descpt, color, size, quantity, available, discount, new, cover, cover2, cover3) 
			VALUES (:block_id, :categ_id, :title, :price, :new_price, :descpt, :color, :size, :quantity, :available, :discount, :newz, :cover, :cover2, :cover3)
		");

		if(isset($_POST['newz'])){
			$newzz = $_POST['newz'];
			if($newzz = 'YES'){
				$newzzz = "YES";
			}else{$newzzz = "";}
		}
		$result = $statement->execute(
			array(
				':block_id'	=>	$_POST["block_id"],
				':categ_id'	=>	$_POST["categ_id"],
				':title'	=>	$_POST["title"],
				':price'	=>	$_POST["price"],
				':new_price'	=>	$_POST["new_price"],
				':descpt'	=>	$_POST["descpt"],
				':color'	=>	$_POST["color"],
				':size'	=>	$_POST["size"],
				':quantity'	=>	$_POST["quantity"],
				':available'=>	$_POST["available"],
				':discount'	=>	$_POST["discount"],
				':newz'	=>	$newzzz, 
				':cover'		=>	$cover, 
				':cover2'		=>	$cover2, 
				':cover3'		=>	$cover3 
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



		$cover2 = '';
		if($_FILES["cover2"]["name"] != '')
		{
			$cover2 = upload_cover2();
		}
		else
		{
			$cover2 = $_POST["hidden_product_cover2"];
		}

		
		$cover3 = '';
		if($_FILES["cover3"]["name"] != '')
		{
			$cover3 = upload_cover3();
		}
		else
		{
			$cover3 = $_POST["hidden_product_cover3"];
		}


		$statement = $connection->prepare(
		/** 	"UPDATE productz 
			SET categ_id = :categ_id, title = :title, price = :price, descpt = :descpt, color = :color, size = :size,
			 quantity = :quantity, available = :available, discount = :discount, new = :newz, cover = :cover WHERE id = :id
			"  ***/

"UPDATE all_products 
SET block_id = :block_id, categ_id = :categ_id, title = :title, price = :price, new_price = :new_price, descpt = :descpt, color = :color, size = :size, quantity = :quantity, 
available = :available, discount = :discount, new = :newz, cover = :cover, cover2 = :cover2, cover3 = :cover3 WHERE id = :id
"
		);
		$result = $statement->execute(
			array( 

				':block_id'	=>	$_POST["block_id"],
				':categ_id'	=>	$_POST["categ_id"],
				':title'	=>	$_POST["title"],
				':price'	=>	$_POST["price"],
				':new_price'	=>	$_POST["new_price"],
				':descpt'	=>	$_POST["descpt"],
				':color'	=>	$_POST["color"],
				':size'	=>	$_POST["size"],
				':quantity'	=>	$_POST["quantity"],
				':available'	=>	$_POST["available"],
				':discount'	=>	$_POST["discount"],
				':newz'	=>	$_POST["newz"],
				':cover'		=>	$cover,
				':cover2'		=>	$cover2,
				':cover3'		=>	$cover3,
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