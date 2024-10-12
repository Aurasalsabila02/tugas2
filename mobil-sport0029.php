<?php
class mobilsports extends mobil0029 {
    public $turbo = false;

    function jalankanturbo(){
        $this->turbo = true;
        return "Jalankan Turbo!";
    }

    // Function overriding
    function infomobil0029() {
        return "Nama Mobil : $this->nama <br>"
        . "Brand : $this->brand <br>"
        . "Tahun : ".$this->tahun."<br>";
    }
}

?>