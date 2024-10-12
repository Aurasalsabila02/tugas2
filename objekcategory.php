<?php
require_once "category.php";

$objcategory = new category();

// Untuk instan variabel tidak lagi menggunakan seperti ini
// $objcategory->name = "HANDPHONE";
$objcategory->setname("HANDPHONE");
$objcategory->setexpensive(true);

// Mengakses data 
echo "Name : {$objcategory->getname()} <br>";
echo "Expensive : {$objcategory->isexpensive()} <br>";

?>