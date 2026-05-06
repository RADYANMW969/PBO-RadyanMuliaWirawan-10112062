<?php
require_once "Kendaraan.php";
require_once "KendaraanRepository.php";

// --- Bagian Controller ---
$repo = new KendaraanRepository();
$dataMentah = $repo->getAll();

$daftarKendaraan = [];
foreach ($dataMentah as $d) {
    $daftarKendaraan[] = new Kendaraan($d['merek'], $d['roda'], $d['harga'], $d['warna'], $d['bbm']);
}

// --- Bagian View ---
foreach ($daftarKendaraan as $k) {
    // Menggunakan printf dengan tag <br> agar baris baru terbaca di browser
    printf("Merek: %s<br>", $k->GetMerek());
    printf("Jumlah Roda: %s<br>", $k->GetJumlahRoda());
    printf("Harga: %s<br>", $k->GetHarga());
    printf("Warna: %s<br>", $k->GetWarna());
    printf("Bahan Bakar: %s<br><br>", $k->GetBhnBakar());
}
?>