<?php 

require 'Class/Config.php';

$config = new Config();
$my_data = $config->getOwnerData();

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title><?=  $config->getProjectName() ?></title>



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




     <div class="container">

      <nav class="navbar navbar-default navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?=  $config->getProjectName() ?></a>
          </div>

         
        </div><!-- /.container-fluid -->
      </nav>

      <div class="jumbotron">
        <h1>Nome: <?=  $my_data['name'] ?></h1>
        <h2>Email: <a href="mailto:<?=  $my_data['email'] ?>"> <?=  $my_data['email'] ?></a></h2>
        <h2>Github: <a href="<?=  $my_data['github'] ?>"><?=  $my_data['github'] ?></a></h2>
        <h2>Repositorio: <a href="<?=  $my_data['repository'] ?>"><?=  $my_data['repository'] ?></a></h2>
        <p><a class="btn btn-primary btn-lg" href="<?=  $config->baseUrl('pages/home') ?>" role="button">Ir para o projeto</a></p>
      </div>


    </div>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>