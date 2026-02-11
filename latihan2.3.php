<?php

class Belanja {
    public $namaPembeli;

    public $namaBarang;

    public $hargaBarang;

    public $jumlahBarang;

    public $totalBayar;

    public $diskon;

    public static $pajak=0.02;

    public function __construct($namaPembeli, $namaBarang, $hargaBarang, $jumlahBarang, $diskon){
        $this->namaPembeli = "Radyan";
        $this->namaBarang = "Sampo";
        $this->hargaBarang = 7000;
        $this->jumlahBarang = 6;
        $this->diskon = 0.5;
    }
    public function totalHarga(){
        $subtotal = $this->hargaBarang * $this->jumlahBarang;
        
        return $subtotal;
    }
}

$belanja1 = new Belanja("Radyan", "Sampo", 7000, 6, 0.5);

echo "<pre>";
echo "Nama Pembeli: " . $belanja1->namaPembeli . "\n";
echo "Nama Barang: " . $belanja1->namaBarang . "\n";
echo "Jumlah Barang: " . $belanja1->jumlahBarang . "\n";
echo "Subtotal: Rp " . $belanja1->totalHarga() . "\n";
echo "Diskon: " . $belanja1->diskon * 100 . "%\n";
echo "</pre>";


?>