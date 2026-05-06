<?php
// Repository: Menyediakan data mentah
class KendaraanRepository {
    public function getAll() {
        return [
            ["merek" => "Yamaha Mio", "roda" => 2, "harga" => 10000000, "warna" => "Merah", "bbm" => "Premum"],
            ["merek" => "Toyota Yaris", "roda" => 4, "harga" => 160000000, "warna" => "Merah", "bbm" => "Premum"],
            ["merek" => "Honda Scoopy", "roda" => 2, "harga" => 13000000, "warna" => "Putih", "bbm" => "Premum"],
            ["merek" => "Isuzu Panther", "roda" => 4, "harga" => 170000000, "warna" => "Merah", "bbm" => "Solar"]
        ];
    }
}
?>