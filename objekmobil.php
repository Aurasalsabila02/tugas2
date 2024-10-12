<?php
// Include class mobil.php
require_once "mobil.php";

// Inisialisasi variabel (Objek) mobilsatu
$mobilsatu = new mobil();

// Menambahkan properties pada objek mobilsatu
$mobilsatu->nama = "AVANZA";
$mobilsatu->merk = "TOYOTA";
$mobilsatu->warna = "HITAM";
$mobilsatu->tahun = 2019;
$mobilsatu->kecepatanmaksimal = 1300;

// Menampilkan informasi objek mobilsatu
echo "Nama : $mobilsatu->nama <br>";
echo "Merk : $mobilsatu->merk <br>";
echo "Warna : $mobilsatu->warna <br>";
echo "Tahun : $mobilsatu->tahun <br>";
echo "Kecepatan Maksimal : $mobilsatu->kecepatanmaksimal <br>";

// Menampilkan informasi objek mobilsatu
var_dump($mobilsatu);

// Membuat objek mobildua
$mobildua = new mobil();

// Menambahkan properties pada objek mobil dua
$mobildua->nama = "BRIO";
$mobildua->merk = "HONDA";
$mobildua->warna = "MERAH";
$mobildua->tahun = 2018;
$mobildua->kecepatanmaksimal = 1000;

// Menampilkan informasi objek mobildua
echo "Nama : $mobildua->nama <br>";
echo "Merk : $mobildua->merk <br>";
echo "Warna : $mobildua->warna <br>";
echo "Tahun : $mobildua->tahun <br>";
echo "Kecepatan Maksimal : $mobildua->kecepatanmaksimal <br>";

// Menampilkan informasi objek mobildua
var_dump($mobildua);




?>