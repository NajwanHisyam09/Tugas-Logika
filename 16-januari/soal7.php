<?php
$bilangan = 90;
$Awal = 3;
$Akhir = 30;

$jumlahPembagianHabis = 0;
for ($i = $Awal; $i <= $Akhir; $i+= $Awal) {
    if ($bilangan % $i === 0) {
        $jumlahPembagianHabis++;
        echo $i;
        echo "<br>";
    }
}

echo "Bilangan $bilangan dapat dibagi habis dengan bilangan kelipatan 3 sebanyak $jumlahPembagianHabis kali.";
//dapat 5 point
?>


