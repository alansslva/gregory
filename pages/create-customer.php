<?php 

require '../Class/Product.php';
require '../Class/Config.php';

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
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>


     <!-- NAVBAR -->
     <?php  include('../layout/navbar.php') ?>


     <div class="container">

      <h1>Cadastrar Cliente</h1>

      <form action="/teste.php" method="POST">

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







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>