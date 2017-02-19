<?php 

require '../Class/Database.php';
require '../Class/Product.php';
require '../Class/Config.php';
require '../Class/People.php';
$product = new Product();
$config = new Config();

$people = new People();

$people_list = $people->getList();
$people_row =  mysqli_num_rows($people_list);

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


   <h1>Pessoas Cadastradas</h1>
   <table id="example" class="display table table-bordered" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Documento</th>
        <th>Email</th>
        <th>Tel</th>
        <th>Endereco</th>
      </tr>
    </thead>
    <?php while($people_row = mysqli_fetch_assoc($people_list)):?>
      <tr>
      <td><?= $people_row['name'] ?></td>
      <td><?= $people_row['document'] ?></td>
      <td><?= $people_row['email'] ?></td>
      <td><?= $people_row['phone'] ?></td>
      <td><?= $people_row['addres'] ?></td>
      </tr>
    <?php endwhile ?>
  </tbody>
</table>



</div>







<?php  include('../layout/scripts.php') ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
      "language": {
        "url": "http://cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"
      }
    });
  } );
</script>
</body>
</html>