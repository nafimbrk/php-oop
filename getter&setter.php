<?php

require_once "data/category.php";

// menggunakan getter dan setter
$category = new category();
$category->setname("handphone");
$category->setexpensive(true);

$category->setname("");  // maka namenya akan tetap yg lama, jadi saat setname pake string kosong maka datanya gk akan dietrima karna kita sudah menambahkan validasi di setternya

echo "Name : {$category->getname()} \n";
echo "Expensive : {$category->getexpensive()} \n";

