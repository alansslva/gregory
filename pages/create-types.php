<?php 

require '../Class/Product.php';
require '../Class/Config.php';

$product = new Product();
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

  <h1>Cadastrar Tipo de Produto</h1>

  <form action="<?=  $config->baseUrl('pages/store-types') ?>" method="POST">

    <div class="row">


      <div class="col-md-12">

        <div class="form-group">

          <label for="">Descricao</label>
          <input type="text" class="form-control" name="name" required>

        </div>

      </div>


      <div class="col-md-12">

        <div class="form-group">

          <button type="submit" class="btn btn-lg btn-success btn-block">Salvar</button>

        </div>

      </div>


    </div>
  </form>

</div>







 <?php  include('../layout/scripts.php') ?>
</html>