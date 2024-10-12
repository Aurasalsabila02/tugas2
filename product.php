<?php
class product {
    // Deklarasi variabel
    private string $nama;
    private int $price;
    // Ini untuk kelas turunan
    protected string $name;
    protected string $pricee;

    // Deklarasi konstruktor
    public function __construct(string $nama, int $price){
        $this->nama = $nama;
        $this->price = $price;
    }
    public function getnama():string
    {
        return $this->nama;
    }
    public function getprice():int
    {
        return $this->price;
    }

}

?>
