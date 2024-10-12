<?php
require_once "product.php";
// Ini untuk kelas turunan
require_once "produkturunan.php";
// Membuat objek produk
$product = new product("Apple",20000);

// Menampilkan info nama dan price
echo $product->getnama()."<br>"; 
echo $product->getprice()."<br>"; 

// Menampilkan pada kelas turunan
$product2 = new produkturunan("Nanas",30000);
$product2->info();

?>  