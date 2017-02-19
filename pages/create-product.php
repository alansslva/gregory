<?php 
// CHAMAR CLASSE DO BBANCO DE DADOS
require '../Class/Database.php';
require '../Class/Config.php';
require '../Class/Type.php';


$config = new Config();
$type = new Type();

$types = $type->getList();
$row =  mysqli_num_rows($types);
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

  <form action="<?=  $config->baseUrl('pages/store-product') ?>" method="POST">

    <div class="row">


      <div class="col-md-7">

        <div class="form-group">

          <label for="">Nome</label>
          <input type="text" class="form-control" name="name" required>

        </div>

      </div>


      <div class="col-md-3">

        <div class="form-group">

          <label for="">Tipo</label>
          <select class="form-control" name="types_id" required>
            <option></option>
            <?php while($row = mysqli_fetch_assoc($types)):?>
              <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
            <?php endwhile ?>
          </select>

        </div>

      </div>

      <div class="col-md-2">

        <div class="form-group">

          <label for="">Valor</label>
          <input type="number" class="form-control" name="price">

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