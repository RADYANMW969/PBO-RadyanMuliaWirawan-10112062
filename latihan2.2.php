<?php

class Belanja {
    public $Kasir;

    public $namaPembeli;

    public $namaBarang;

    public $hargaBarang;

    public $jumlahBarang;

    public $totalBayar;

    public $uangBayar;

    public $diskon;

    public $kembalian;


    public static $pajak=0.02;
    public function totalHarga(){
        $subtotal = $this->hargaBarang * $this->jumlahBarang;
        
        return $subtotal;
    }
}

$belanja1 = new Belanja("Radyan", "Sabun", 8000, 2, 0.1);
$belanja1->namaPembeli = "Radyan";
$belanja1->namaBarang = "Sabun";
$belanja1->hargaBarang = 8000;
$belanja1->jumlahBarang = 2;
$belanja1->diskon = 0.1;
$belanja1->Kasir = "Rizky";
$belanja1->uangBayar = 20000;

echo "<pre>";
echo "================ WARUNG PRIA SOLO =================\n";
echo "Kasir   : " . $belanja1->Kasir . "\n";
echo "Pembeli : " . $belanja1->namaPembeli . "\n";
echo "-------------------------------------------\n";
echo "Nama Barang : " . $belanja1->namaBarang . "\n";
echo "-------------------------------------------\n";
echo "Subtotal : Rp " . $belanja1->totalHarga() . "\n";
echo "Diskon   : " . $belanja1->diskon * 100 . "\n";
echo "Pajak    : " . Belanja::$pajak * 100 . "\n";
echo "-------------------------------------------\n";
echo "Total Bayar : Rp " . ($belanja1->totalHarga() - ($belanja1->totalHarga() * $belanja1->diskon) + ($belanja1->totalHarga() * Belanja::$pajak)) . "\n";
echo "Uang Bayar  : Rp " . $belanja1->uangBayar . "\n";
echo "Kembalian   : Rp " . ($belanja1->uangBayar - ($belanja1->totalHarga() - ($belanja1->totalHarga() * $belanja1->diskon) + ($belanja1->totalHarga() * Belanja::$pajak))) . "\n";
echo "===========================================\n";




?>