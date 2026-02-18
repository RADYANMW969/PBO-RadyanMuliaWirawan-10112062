<?php
class PegadaianSyariah{
    public $pinjaman;
    public $bunga;
    public $lamaAngsuran;
    public $keterlambatan;

    public function totalPinjaman(){
        $totalPinjaman = $this->pinjaman + ($this->pinjaman * $this->bunga / 100);
        return $totalPinjaman;
    }
    public function angsuranPerBulan(){
        $angsuran = $this->totalPinjaman() / $this->lamaAngsuran;
        return $angsuran;
    }
    public function dendaKeterlambatan(){
        $denda = $this->angsuranPerBulan() * 0.0015 * $this->keterlambatan;
        return $denda;
    }
    public function totalBayar(){
        $totalBayar = $this->angsuranPerBulan() + $this->dendaKeterlambatan();
        return $totalBayar;
    }
}

$objek = new PegadaianSyariah();
$objek->pinjaman = 
$pinjaman=htmlspecialchars($_POST['besar_pinjaman']);
$objek->bunga =
$bunga=htmlspecialchars($_POST['besar_bunga']);
$objek->lamaAngsuran =
$lamaAngsuran=htmlspecialchars($_POST['lama_angsuran']);
$objek->keterlambatan =
$keterlambatan=htmlspecialchars($_POST['keterlambatan']);

echo "<h2>Tugas</h2>";
echo "TOKO PEGADAIAN SYARIAH <br>";
echo "Jl Keadilan No 16" . "<br><br>";
echo "Telp. 72353459" . "<br><br>";

echo "Program Penghitung Besaran Angsuran Hutang <br><br>";
echo "Besaran Pinjaman : Rp " . $objek->pinjaman . "<br>";
echo "Masukan Besar Bunga : " . $objek->bunga . "%<br>";
echo "Total Pinjaman : Rp " . $objek->totalPinjaman() . "<br>";
echo "Lama Angsuran : " . $objek->lamaAngsuran . "<br>";
echo "Besaran Angsuran : Rp " . $objek->angsuranPerBulan() . "<br>";

echo "Ketentuan denda keterlambatan : 0.15% per hari dari angsuran" . "<br>";
echo "Keterlambatan Angsuran (Hari) : " . $objek->keterlambatan . "<br>";
echo "Denda Keterlambatan : Rp " . $objek->dendaKeterlambatan() . "<br><br>";
echo "Besaran Pembayaran : Rp " . $objek->totalBayar() . "<br>";
?>






