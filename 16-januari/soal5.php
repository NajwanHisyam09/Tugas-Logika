<?php

$Belanja = 154000;
$minBelanja = 100000;

$diskon = 7;

if ($Belanja >= $minBelanja) {
    $dis = ($diskon / 100) * $Belanja;

    $hargaSetelahDiskon = $Belanja - $dis;

    echo "Harga diskon : Rp.$dis harga setelah diskon : Rp " . number_format($hargaSetelahDiskon, 2);
} else {
    echo "Harga yang harus dibayar oleh Andi: Rp " . number_format($Belanja, 2);
} 

//dapat 5 point

?>
