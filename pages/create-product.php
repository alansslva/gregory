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

  <h1>Cadastrar Produto</h1>

  <form action="<?=  $config->baseUrl('pages/store-customer') ?>" method="POST">

    <div class="row">


      <div class="col-md-9">

        <div class="form-group">

          <label for="">Nome</label>
          <input type="text" class="form-control" name="name" required>

        </div>

      </div>


      <div class="col-md-3">

        <div class="form-group">

          <label for="">Documento</label>
          <input type="text" class="form-control" name="document" required>

        </div>

      </div>

      <div class="col-md-4">

        <div class="form-group">

          <label for="">Email</label>
          <input type="email" class="form-control" name="email">

        </div>

      </div>

      <div class="col-md-4">

        <div class="form-group">

          <label for="">Telefone</label>
          <input type="text" class="form-control" name="phone">

        </div>

      </div>

      <div class="col-md-4">

        <div class="form-group">

          <label for="">Endereço</label>
          <input type="text" class="form-control" name="addres">

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