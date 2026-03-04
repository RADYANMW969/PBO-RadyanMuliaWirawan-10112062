<?php
//ini function
function formatRupiah($angka){
    return "Rp " . number_format($angka,0,'.','.');
}
//Class
Class Belanja {
    //properties
    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;
//method
    public function hitungSubtotal() {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungDiskon($subtotal) {
    if ($subtotal > 100000){
        return $subtotal * 0.1;
} 
        return 0;
}
    public function hitungTotal() {
        $subtotal = $this->hitungSubtotal();
        $diskon = $this->hitungDiskon($subtotal);
        return $subtotal - $diskon;
    }
}

$dataBelanja = [
[
    'namaPembeli' => 'Miftah',
    'namaBarang' => 'Mie Ayam',
    'hargaBarang' => 12000,
    'jumlahBeli' => 12,
],

[
    "namaPembeli" => "Radyan",
    "namaBarang" => "Sapu",
    "hargaBarang" => 10000,
    "jumlah" => 1
]
];

echo "<h2>TRANSAKSI 1</h2>";

$errors1 = [];
$namaPembeli   = $dataBelanja[0]["namaPembeli"];
$namaBarang = $dataBelanja[0]["namaBarang"];
$hargaBarang  = $dataBelanja[0]["hargaBarang"];
$jumlahBeli = $dataBelanja[0]["jumlahBeli"];

if (empty($namaPembeli)) {
    $errors1[] = "Nama pembeli tidak boleh kosong";
}

if($hargaBarang <= 0) {
    $errors1[] = "Harga harus lebih dari 0.";
}

if ($jumlahBeli <=0) {
    $errors1[] = "Jumlah beli harus lebih dari 0.";
}

if (empty($errors1)) {
    foreach ($errors1 as $error) {
        echo $error . "<br>";
    }
} else {
    $belanja1 = new BelanjaWarung();
    $belanja1->namaPembeli = $namaPembeli;
    $belanja1->namaBarang = $namaBarang;
    $belanja1->hargaBarang = $hargaBarang;
    $belanja1->jumlahBeli = $jumlahBeli;

    $subtotal = $belanja1->hitungSubtotal();
    $diskon = $belanja1->hitungDiskon($subtotal);
    $total = $belanja1->hitungTotal();

    echo "Pembeli   : $belanja1->namaPembeli<br>";
    echo "Barang    : $belanja1->namaBrang<br>";
    echo "Subtotal  : " . formatRupiah($subtotal) . "<br>";
    echo "Diskon    : " . formatRupiah($diskon) . "<br>";
    echo "<b>Total Bayar: " . formatRupiah($total) . "</br><br><br>";
}

echo "<h2>TRANSAKSI 2</h2>";

$errors2 = [];

$namaPembeli   = $dataBelanja[1]["namaPembeli"];
$namaBarang = $dataBelanja[1]["namaBarang"];
$hargaBarang  = $dataBelanja[1]["hargaBarang"];
$jumlahBeli = $dataBelanja[1]["jumlah"];

if (empty($namaPembeli)) {
    $errors2[] = "Nama pembeli tidak boleh kosong.";
}

if ($hargaBarang <= 0) {
    $errors2[] = "Harga harus lebih dari 0.";
}

if ($jumlahBeli <= 0) {
    $errors2[] = "Jumlah beli harus lebih dari 0.";
}

if (empty($errors2)) {
    foreach ($errors2 as $error) {
        echo $error . "<br>";
    }
} else {

    $belanja2 = new BelanjaWarung(); 
    $belanja2->namaPembeli = $namaPembeli;
    $belanja2->namaBarang  = $namaBarang;
    $belanja2->hargaBarang = $hargaBarang;
    $belanja2->jumlahBeli  = $jumlahBeli;

    $subtotal = $belanja2->hitungSubtotal();
    $diskon   = $belanja2->hitungDiskon(subtotal: $subtotal);
    $total    = $belanja2->hitungTotal();

    echo "Pembeli: $belanja2->namaPembeli<br>";
    echo "Barang: $belanja2->namaBarang<br>";
    echo "Subtotal: " . formatRupiah(angka: $subtotal) . "<br>";
    echo "Diskon: " . formatRupiah(angka: $diskon) . "<br>";
    echo "<b>Total Bayar: " . formatRupiah(angka: $total) . "</b><br><br>";
}

?>

