<?php

// CLASS INDUK
class Employee {
    public $nama, $gaji, $lamaKerja;

    public function __construct($nama, $gaji, $lamaKerja){
        $this->nama = $nama;
        $this->gaji = $gaji;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji(){
        return $this->gaji;
    }
}

// CLASS PROGRAMMER
class Programmer extends Employee {
    public function hitungGaji(){
        if($this->lamaKerja < 1){
            return $this->gaji;
        } 
        else if($this->lamaKerja <= 10){
            return $this->gaji + (0.01 * $this->lamaKerja * $this->gaji);
        } 
        else {
            return $this->gaji + (0.02 * $this->lamaKerja * $this->gaji);
        }
    }
}

// CLASS DIREKTUR
class Direktur extends Employee {
    public function hitungGaji(){
        $bonus = 0.5 * $this->lamaKerja * $this->gaji;
        $tunjangan = 0.1 * $this->lamaKerja * $this->gaji;
        return $this->gaji + $bonus + $tunjangan;
    }
}

// CLASS PEGAWAI MINGGUAN
class PegawaiMingguan extends Employee {
    public $jumlahJual, $target, $hargaBarang;

    public function __construct($nama, $gaji, $lamaKerja, $jumlahJual, $target, $hargaBarang){
        parent::__construct($nama, $gaji, $lamaKerja);
        $this->jumlahJual = $jumlahJual;
        $this->target = $target;
        $this->hargaBarang = $hargaBarang;
    }

    public function hitungGaji(){
        if($this->jumlahJual > (0.7 * $this->target)){
            return $this->gaji + (0.10 * $this->hargaBarang * $this->jumlahJual);
        } else {
            return $this->gaji + (0.03 * $this->hargaBarang * $this->jumlahJual);
        }
    }
}

// AMBIL DATA FORM
$jenis = $_POST['jenis'];
$nama  = $_POST['nama'];
$gaji  = $_POST['gaji'];
$lama  = $_POST['lama'];
$jual  = $_POST['jual'];
$target= $_POST['target'];
$harga = $_POST['harga'];

// BUAT OBJECT SESUAI JENIS
if($jenis == "programmer"){
    $obj = new Programmer($nama, $gaji, $lama);
}
else if($jenis == "direktur"){
    $obj = new Direktur($nama, $gaji, $lama);
}
else{
    $obj = new PegawaiMingguan($nama, $gaji, $lama, $jual, $target, $harga);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Gaji</title>
</head>
<body>

<h2>Hasil Perhitungan Gaji</h2>

<?php
echo "Nama : $nama <br>";
echo "Jenis : $jenis <br>";
echo "Gaji Akhir : Rp ".number_format($obj->hitungGaji(),0,",",".");
?>

<br><br>
<a href="form7.php">Kembali</a>

</body>
</html>
