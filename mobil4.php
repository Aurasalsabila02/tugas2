<?php
class mobil4 {
    var $nama;
    var $merk;
    var ?string $warna = null;
    var $tahun;
    var $kecepatanmaksimal;

}
// Membuat objek
$mobilempat = new mobil4();

// F U N C T I O N
function tambahkecepatan()
{
    echo "Kecepatan Bertambah";
}

// Mengakses FUNCTION/METHOD
$mobilempat_>tambahkecepatan();
?>