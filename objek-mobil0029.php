<?php
require_once "mobil-0029.php";
require_once "mobil-sport0029.php";

// Objek dari class mobil
$avanza = new mobil0029("Avanza","Toyota",2020);
echo $avanza->infomobil0029();

// Objek dari class mobilsport
$supra = new mobilsports("Supra","Toyota",2021);
echo $supra->infomobil0029();
echo $supra->jalankanturbo();
?>