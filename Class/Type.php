<?php 


class Type{


	function getList(){
		$database = new Database();

		$sql =  'SELECT * FROM types';

		$result = $database->transaction($sql);

		return $result;
	}


	function store($name){
		$database = new Database();

		$sql =  "INSERT INTO `types`
		(`name`)
		VALUES
		('".$name."')";

		$database->transaction($sql);
	}

}