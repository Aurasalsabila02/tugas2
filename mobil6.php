<?php
// Properties type declaration
class mobil6 {
    const AUTHOR = "Aura"; // Constant
    var $nama;
    var $merk;
    var $warna;
    var $tahun;
    var $kecepatanmaksimal;

}
// Inisialisasi variabel (Objek) mobilsatu
$mobilenam = new mobil6();

// Menambahkan properties pada objek mobilsatu
$mobilenam->nama = "AVANZA";
$mobilenam->merk = "TOYOTA";
$mobilenam->warna = "HITAM";
$mobilenam->tahun = 2019;
$mobilenam->kecepatanmaksimal = 1300;

// Menampilkan informasi objek mobilsatu
echo mobil6::AUTHOR;
echo "Nama : $mobilenam->nama <br>";
echo "Merk : $mobilenam->merk <br>";
echo "Warna : $mobilenam->warna <br>";
echo "Tahun : $mobilenam->tahun <br>";
echo "Kecepatan Maksimal : $mobilenam->kecepatanmaksimal <br>";

?>
