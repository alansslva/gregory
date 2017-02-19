<?php 




class People {

	function getList(){
		$database = new Database();

		$sql =  'SELECT * FROM people';

		$result = $database->transaction($sql);

		return $result;
	}


	function store($name, $document, $email, $phone, $addres){

		// isntanciar classe db
		$database = new Database();


		$sql =  "INSERT INTO `people`
		(`name`,
		`document`,
		`email`,
		`phone`,
		`addres`)
		VALUES
		('".$name."',
		'".$document."',
		'".$email."',
		'".$phone."',
		'".$addres."')";

		$database->transaction($sql);

		
	}

}