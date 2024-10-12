<?php

class mobil3 {
    var $nama;
    var $merk;
    var ?string $warna = null; // Nullable properties
    var $tahun;
    var $kecepatanmaksimal;

}
// Membuat objek
$mobiltiga = new mobil3();
$mobiltiga->nama = null; // Error karena pada deklarasi tidak dibuat null
$mobiltiga->merk = "TOYOTA";
$mobiltiga->warna = null; // Valid karena sudah dideklarasikan boleh null
$mobiltiga->tahun = 2019;
$mobiltiga->kecepatanmaksimal = 1300;
?>