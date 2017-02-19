<?php 


// CHAMAR CLASSE DO BBANCO DE DADOS
require '../Class/Database.php';
//REQUIRE DE CLASSES
require '../Class/Product.php';


$product_id 	= $_GET["product_id"];


$product = new Product();

$row = mysqli_fetch_assoc($product->getPrice($product_id));

echo $row['price'];

