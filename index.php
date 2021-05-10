<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Service\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product){
    echo $product->getName(). "<br/>";
}
