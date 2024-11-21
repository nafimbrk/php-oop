<?php

// menggunakan product

require_once "data/product.php";

$product = new product("apple", 10000);

// $product->name;   reor
// $product->price;   eror

// solusinya agar bisa mengaksesnya buat function get data
echo $product->getname();
echo $product->getprice();

$dummy = new productdummy("dummy", 1000);
$dummy->info();