<?php 



class Database {



	private function connection(){
		$con = mysqli_connect("localhost", "root", "",'mydb') or print (mysql_error()); 

		return $con;
	}

	function transaction($sql){
		$con = $this->connection();

		$result = mysqli_query($con,$sql);

		mysqli_close($con); 

		return $result;
	}

}