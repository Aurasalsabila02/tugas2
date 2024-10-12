<?php
require_once "mobil7.php";

$mobiltujuh = new mobil7("AVANZA","XENIA");
$mobiltujuh->tahun =2019;

$mobil7 = new mobil7("BRIO",null);
$mobil7->tahun = 2020;

// Tugas
$infomahasiswa = new mobil7("Aura Salsabila",null);
$infomahasiswa->tahun = 2023;
$infomahasiswa->kelas = "3P41";
$infomahasiswa->matkul = "Pemrograman berbasis web 2";
$infomahasiswa->nim = "23.240.0029";

echo $mobiltujuh->infomobil7()."<br>";
echo $mobil7->infomobil7()."<br>";
// Tugas
echo $infomahasiswa->infomahasiswa()."<br>";



?>