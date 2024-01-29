<?php
$usiaAndi = 25; 
$MatematikaAndi = 83;
$IndonesiaAndi = 87;
$InggrisAndi = 86;

$minUsia = 16;
$maxUsia = 25;
$minMatematika = 87;
$minIndonesia = 87;
$minInggris = 85;
$minRata = 85;

$statusPendaftaran = "Ditolak";

if ($usiaAndi >= $minUsia && $usiaAndi <= $maxUsia) {
    if ($MatematikaAndi >= $minMatematika &&
        $IndonesiaAndi >= $minIndonesia &&
        $InggrisAndi >= $minInggris) {

        $rataRataNilai = ($MatematikaAndi + $IndonesiaAndi + $InggrisAndi) / 3;

        if ($rataRataNilai >= $MinRata) {
            $statusPendaftaran = "Diterima";
        }
    }
}

echo "Maka Status dari pendaftaran Andi: $statusPendaftaran";

//dapat point 5
?>


