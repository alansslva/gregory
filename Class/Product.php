<?php 

// CHAMAR CLASSE DO BBANCO DE DADOS


class Product {

	function getList(){
		$database = new Database();

		$sql =  'SELECT * FROM products';

		$result = $database->transaction($sql);

		return $result;
	}


	function store($name, $types_id, $price){

		// instanciar classe db
		$database = new Database();


		$sql =  "INSERT INTO `products`
		(`name`,
		`types_id`,
		`price`)
		VALUES
		('".$name."',
		'".$types_id."',
		'".$price."')";


		$database->transaction($sql);
	}

	function getPrice($id){
		$database = new Database();

		$sql =  'SELECT * FROM products where id = '.$id;

		$result = $database->transaction($sql);

		return $result;
	}
}

