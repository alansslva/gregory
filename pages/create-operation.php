<?php 


include ('../connection/db.php');


$people = mysqli_query($con, 'SELECT * FROM mydb.people' );

$row = mysqli_fetch_array($people);


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

  		<form action="#" method="POST">

  			<div class="col-md-6">

  				<select name="people_id" id="" class="form-control">
  				<?php while ($row = mysqli_fetch_array($people)):?>
  						<option value="<?= $row['id'] ?>"><?=  $row['name'] ?></option>
  					<?php endwhile ?>
  				</select>


  			</div>

  		</form>

  	</div>







  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
  </html>