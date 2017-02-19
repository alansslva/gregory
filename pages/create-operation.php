<?php 
// CHAMAR CLASSE DO BBANCO DE DADOS
require '../Class/Database.php';
require '../Class/Product.php';
require '../Class/People.php';
require '../Class/Config.php';

$product = new Product();
$config = new Config();
$people = new People();

$people_list = $people->getList();
$people_row =  mysqli_num_rows($people_list);

$product_list = $product->getList();
$product_row =  mysqli_num_rows($product_list);

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

  <h1>Cadastrar Cliente</h1>

  <form action="<?=  $config->baseUrl('pages/store-customer') ?>" method="POST">

    <div class="row">


      <div class="col-md-5">

        <div class="form-group">

          <label for="">Pessoa</label>
          <select class="form-control" name="people_id" required>
            <option>
             <?php while($people_row = mysqli_fetch_assoc($people_list)):?>
              <option value="<?= $people_row['id'] ?>"><?= $people_row['name'] ?></option>
            <?php endwhile ?>
          </option>

        </select>

      </div>

    </div>

    <div class="col-md-5">

      <div class="form-group">

        <label for="">Produto</label>
        <select class="form-control" name="product_id" id="product_id" required>
          <option value=""></option>
          <?php while($product_row = mysqli_fetch_assoc($product_list)):?>
            <option value="<?= $product_row['id'] ?>"><?= $product_row['name'] ?></option>
          <?php endwhile ?>

        </select>

      </div>

    </div>

    <div class="col-md-2">

      <div class="form-group">

        <label for="">Preco</label>
        <input class="form-control" type="text" readonly="" name="price" id="price">

      </div>

    </div>

    <div class="col-md-2 col-md-offset-3">

      <div class="form-group">

        <label for="">Tipo</label>
        <select name="type_operation" id="" class="form-control">
          <option value="COMPRA">COMPRA</option>
          <option value="VENDA">VENDA</option>
        </select>

      </div>

    </div>

    <div class="col-md-2">

      <div class="form-group">

        <label for="">Qtd</label>
        <input class="form-control" type="text" name="qtd" id="qtd">

      </div>

    </div>

    <div class="col-md-2">

      <div class="form-group">

        <label for="">Total</label>
        <input id="total_value" class="form-control" type="text" name="total_value" readonly>

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

<script>

 $('#product_id').on('change', function() {
  // alert( this.value );
  $.get('<?= $config->baseUrl('functions/get_price_product?product_id=') ?>' + this.value , function(data) {
   $('#price').val(data);
   console.log(data);
 });
})



 $('#qtd').keyup(function() {
   $('#total_value').val( parseFloat($('#qtd').val()) * parseFloat($('#price').val()));
 });
</script>
</html>