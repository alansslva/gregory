<?php 

// CHAMAR CLASSE DO BBANCO DE DADOS
require '../Class/Database.php';




class People {


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