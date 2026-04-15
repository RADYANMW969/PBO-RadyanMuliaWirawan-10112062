<?php

class Karyawan {
    public $nama;
    public $golongan;
    public $jamLembur;
    public $gajiPokok;
    public $totalGaji;

    
    public function __construct($nama, $golongan, $jamLembur) {
        $this->nama = $nama;
        $this->golongan = $golongan;
        $this->jamLembur = $jamLembur;

        $this->gajiPokok = $this->getGajiPokok();
        $this->totalGaji = $this->gajiPokok + ($this->jamLembur * 15000);
    }

    
    public function getGajiPokok() {
        $dataGaji = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];

        return $dataGaji[$this->golongan] ?? 0;
    }

    
    public function __destruct() {
        
    }
}


$dataKaryawan = [];


do {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";

    $menu = trim(fgets(STDIN));

    switch ($menu) {

        
        case 1:
            echo "\n===== DATA GAJI KARYAWAN =====\n";
            echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";

            if (empty($dataKaryawan)) {
                echo "Data masih kosong.\n";
                break;
            }

            foreach ($dataKaryawan as $i => $k) {
                echo ($i+1) . " | {$k->nama} | {$k->golongan} | {$k->jamLembur} | Rp " . number_format($k->totalGaji, 0, ',', '.') . "\n";
            }
            break;

       
        case 2:
            echo "Masukan Nama: ";
            $nama = trim(fgets(STDIN));

            echo "Masukan Golongan (contoh: IIb): ";
            $gol = trim(fgets(STDIN));

            echo "Masukan Jam Lembur: ";
            $jam = trim(fgets(STDIN));

            if (!is_numeric($jam)) {
                echo "Jam lembur tidak valid!\n";
                break;
            }

            $dataKaryawan[] = new Karyawan($nama, $gol, $jam);
            echo "Data berhasil ditambahkan.\n";
            break;

        case 3:
            echo "Masukan nomor data yang ingin diupdate: ";
            $index = trim(fgets(STDIN)) - 1;

            if (!isset($dataKaryawan[$index])) {
                echo "Data tidak ditemukan!\n";
                break;
            }

            echo "Nama baru: ";
            $nama = trim(fgets(STDIN));

            echo "Golongan baru: ";
            $gol = trim(fgets(STDIN));

            echo "Jam lembur baru: ";
            $jam = trim(fgets(STDIN));

            $dataKaryawan[$index] = new Karyawan($nama, $gol, $jam);
            echo "Data berhasil diupdate.\n";
            break;

    
        case 4:
            echo "Masukan nomor data yang ingin dihapus: ";
            $index = trim(fgets(STDIN)) - 1;

            if (!isset($dataKaryawan[$index])) {
                echo "Data tidak ditemukan!\n";
                break;
            }

            unset($dataKaryawan[$index]);
            $dataKaryawan = array_values($dataKaryawan);

            echo "Data berhasil dihapus.\n";
            break;

        case 5:
            echo "Keluar dari program.\n";
            break;

        default:
            echo "Menu tidak valid.\n";
    }

} while ($menu != 5);

?>
