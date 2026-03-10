<?php

class Pembeli {

    public $nama;
    public $punyaKartu;
    public $totalBelanja;
    public $diskon;

    function __construct($nama, $punyaKartu, $totalBelanja){
        $this->nama = $nama;
        $this->punyaKartu = $punyaKartu;
        $this->totalBelanja = $totalBelanja;
    }

    function hitungDiskon(){

        if($this->punyaKartu){

            if($this->totalBelanja > 500000){
                $this->diskon = 50000;
            }
            elseif($this->totalBelanja > 100000){
                $this->diskon = 15000;
            }
            else{
                $this->diskon = 0;
            }

        }else{

            if($this->totalBelanja > 100000){
                $this->diskon = 5000;
            }else{
                $this->diskon = 0;
            }

        }
    }
}



$pembeli1 = new Pembeli("Pembeli 1", true, 200000);
$pembeli2 = new Pembeli("Pembeli 2", true, 570000);
$pembeli3 = new Pembeli("Pembeli 3", false, 120000);
$pembeli4 = new Pembeli("Pembeli 4", false, 90000);



$pembeli1->hitungDiskon();
$pembeli2->hitungDiskon();
$pembeli3->hitungDiskon();
$pembeli4->hitungDiskon();


echo "<h2>HASIL PERHITUNGAN</h2>";

function tampil($pembeli){
    $totalBayar = $pembeli->totalBelanja - $pembeli->diskon;

    echo "Nama : $pembeli->nama <br>";
    echo "Kartu Member : " . ($pembeli->punyaKartu ? "Memiliki" : "Tidak Memiliki") . "<br>";
    echo "Total Belanja : Rp " . number_format($pembeli->totalBelanja,0,',','.') . "<br>";
    echo "Diskon : Rp " . number_format($pembeli->diskon,0,',','.') . "<br>";
    echo "Total Bayar : Rp " . number_format($totalBayar,0,',','.') . "<br>";
    echo "<hr>";
}

tampil($pembeli1);
tampil($pembeli2);
tampil($pembeli3);
tampil($pembeli4);

?>