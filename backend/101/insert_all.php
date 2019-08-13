<?php
include('db.php');
include('function_all_items.php');
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
			INSERT INTO all_items (sub_categ_id, categ_id, title, price, new_price, discount, descpt, color, size, quantity, available, newz, cover, cover2, cover3) 
			VALUES (:sub_categ_id; categ_id, :title, :price, :new_price; :discount; :descpt; :color, :size, :quantity, :available, :newz, :cover, :cover2, :cover3)
		");

		if(isset($_POST['newz'])){
			$newzz = $_POST['newz'];
			if($newzz = 'YES'){
				$newzzz = "YES";
			}else{$newzzz = "";}
		}
		$result = $statement->execute(
			array(
				':sub_categ_id'	=>	$_POST["sub_categ_id"],
				':categ_id'	=>	$_POST["categ_id"],
				':title'	=>	$_POST["title"],
				':price'	=>	$_POST["price"],
				':new_price'	=>	$_POST["new_price"],
				':discount'	=>	$_POST["discount"],
				':descpt'	=>	$_POST["descpt"],
				':color'	=>	$_POST["color"],
				':size'	=>	$_POST["size"],
				':quantity'	=>	$_POST["quantity"],
				':available'=>	$_POST["available"],
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
			"  */

"UPDATE all_items 
SET sub_categ_id = :sub_categ_id, categ_id = :categ_id, title = :title, price = :price, new_price = :new_price, discount = :discount, descpt = :descpt, color = :color, size = :size, quantity = :quantity, 
available = :available,  new = :newz, cover = :cover, cover2 = :cover2, cover3 = :cover3 WHERE id = :id
"
		);
		$result = $statement->execute(
			array( 

				':sub_categ_id'	=>	$_POST["sub_categ_id"],
				':categ_id'	=>	$_POST["categ_id"],
				':title'	=>	$_POST["title"],
				':price'	=>	$_POST["price"],
				':new_price'	=>	$_POST["new_price"],
				':discount'	=>	$_POST["discount"],
				':descpt'	=>	$_POST["descpt"],
				':color'	=>	$_POST["color"],
				':size'	=>	$_POST["size"],
				':quantity'	=>	$_POST["quantity"],
				':available'	=>	$_POST["available"],
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