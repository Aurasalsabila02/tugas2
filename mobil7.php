<?php 
class mobil7{
    var string $nama;
    var ?string $merk = null;
    var int $tahun;
    // Tambahan untuk tugas
    var string $kelas;
    var string $matkul;
    var string $nim;
    
    // Constructor
    public function __construct(string $nama, ?string $merk)
    {
        $this->nama = $nama;
        $this->merk = $merk;
    }

    public function infomobil7()
    {
        return "$this->nama, $this->merk, $this->tahun;";
    }

    // Tugas
    public function infomahasiswa()
    {
        return "$this->nama,$this->tahun,$this->kelas,$this->matkul,$this->nim;";
    }
}

?>