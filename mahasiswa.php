<?php
class Mahasiswa {
    public $nama, $nim, $jurusan, $semester, $ipk = 0, $matkul = array();

    public function __construct($nama, $nim, $jurusan, $semester) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->semester = $semester;
    }

    public function tampilkanData() {
        echo "Nama: $this->nama<br>NIM: $this->nim<br>Jurusan: $this->jurusan<br>Semester: $this->semester<br>IPK: $this->ipk<br><br>";
    }

    public function tambahMatkul($namaMatkul, $nilai) {
        $this->matkul[] = ["nama" => $namaMatkul, "nilai" => $nilai];
        echo "Mata kuliah $namaMatkul ditambahkan dengan nilai $nilai.<br>";
    }

    public function tampilkanMatkul() {
        echo "Daftar Mata Kuliah:<br>";
        foreach ($this->matkul as $m) {
            echo "- {$m['nama']}: Nilai {$m['nilai']}<br>";
        }
    }

    public function hitungIpk() {
        $totalNilai = array_sum(array_column($this->matkul, 'nilai'));
        $this->ipk = count($this->matkul) ? $totalNilai / count($this->matkul) : 0;
        echo "IPK: " . number_format($this->ipk, 2) . "<br>";
    }
}

// Membuat objek mahasiswa
$mahasiswa = new Mahasiswa("Aura Salsabila", "123.240.0029", "Teknik Informatika", 3);
$mahasiswa->tampilkanData();
$mahasiswa->tambahMatkul("web 2", 3.5);
$mahasiswa->tambahMatkul("Pemrograman", 4.0);
$mahasiswa->tambahMatkul("Sistem Operasi", 3.75);
$mahasiswa->tampilkanMatkul();
$mahasiswa->hitungIpk();
?>