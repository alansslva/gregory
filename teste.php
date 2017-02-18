<?php 


$name 		= $_POST["name"];
$document 	= $_POST["document"];
$email 		= $_POST["email"];
$phone 		= $_POST["phone"];
$addres 	= $_POST["addres"];


include ('connection/db.php');


$sql =  "INSERT INTO `mydb`.`people`
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

mysqli_query($con,$sql);

mysqli_close($con); 
?>


<?php 

require 'Class/Product.php';
require 'Class/Config.php';

$product = new Product();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Gregory</title>



	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>


  	<!-- NAVBAR -->
  	<?php  include('layout/navbar.php') ?>


  	<div class="container">

	<div class="alert alert-success" role="alert">Pessoa Cadastrada com sucesso <a href="pages/create-customer.php">Clique Aqui para realizar um novo cadastro</a> </div>
  	

  	</div>







  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>