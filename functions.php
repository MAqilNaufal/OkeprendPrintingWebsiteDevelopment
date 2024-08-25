<?php

//require MySQL Connection
require ('database/DBController.php');

//require product class
require ('database/Product.php');

//DBController objects
$db = new DBController();

//Product onject
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object

