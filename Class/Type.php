<?php 

// CHAMAR CLASSE DO BBANCO DE DADOS
require '../Class/Database.php';

class Type{


	function store($name){
		$database = new Database();

		$sql =  "INSERT INTO `types`
		(`name`)
		VALUES
		('".$name."')";

		$database->transaction($sql);
	}

}