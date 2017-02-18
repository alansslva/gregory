<?php 


//REQUIRE DE CLASSES
require '../Class/Config.php';
require '../Class/Type.php';


// PEGAR VARIAVEIS DO POST
$name 		   		= $_POST["name"];

// INSTANCIAR NOVO OBJETO DO TIPO TYPE
$type = new Type();

// CHAMAR FUNCAO STORE DA CLASSE TYPE
$type->store($name);


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

   <div class="alert alert-success" role="alert">Tipo de Produto Cadastrada com sucesso <a href="<?=  $config->baseUrl('pages/create-types') ?>">Clique Aqui</a> para realizar um novo cadastro. Ou <a href="<?=  $config->baseUrl('pages/home') ?>">Clique Aqui</a> para voltar a pagina inicial </div>


 </div>






 <?php  include('../layout/scripts.php') ?>
</body>
</html>