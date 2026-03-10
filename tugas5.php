<?php

$kartu_member = "ya"; 
$total_belanja = 334000;

$diskon = 0;


if ($kartu_member == "ya") {

    if ($total_belanja > 500000) {
        $diskon = 50000;
    } 
    else if ($total_belanja > 100000) {
        $diskon = 15000;
    }

} else {

    if ($total_belanja > 100000) {
        $diskon = 5000;
    }

}

$total_bayar = $total_belanja - $diskon;

echo "Apakah ada kartu member : " . $kartu_member . "<br>";
echo "Total belanja : Rp " . $total_belanja . "<br>";
echo "Diskon : Rp " . $diskon . "<br>";
echo "Total Bayar : Rp " . $total_bayar;

?>
