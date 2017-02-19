<?php 

// CHAMAR CLASSE DO BBANCO DE DADOS
require '../Class/Database.php';
//REQUIRE DE CLASSES
require '../Class/Config.php';
require '../Class/Product.php';


// PEGAR VARIAVEIS DO POST
$name 		   		= $_POST["name"];
$types_id 	 		= $_POST["types_id"];
$price 		   		= $_POST["price"];


// INSTANCIAR NOVO OBJETO DO TIPO PESSOA
$product = new Product();

// CHAMAR FUNCAO STORE DA CLASSE PESSOA
$product->store($name, $types_id, $price);


// instanciar objeto de configuracao
$config = new Config();


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php  include('../layout/head.php') ?>
</head>
<body>


 <!-- NAVBAR -->
 <?php  include('../layout/navbar.php') ?>


 <div class="container">

   <div class="alert alert-success" role="alert">Pessoa Cadastrada com sucesso <a href="<?=  $config->baseUrl('pages/create-customer') ?>">Clique Aqui</a> para realizar um novo cadastro. Ou <a href="<?=  $config->baseUrl('pages/home') ?>">Clique Aqui</a> para voltar a pagina inicial </div>


 </div>






 <?php  include('../layout/scripts.php') ?>
</body>
</html>