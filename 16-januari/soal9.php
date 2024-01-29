<?php
$nama = "beni";
$bb = 54;
$tb = 169;

$rumus = $bb / (($tb / 100) ** 2);

if ($rumus < 18.5) {
    $status = "Kurang";
} elseif ($rumus >= 18.5 && $rumus <= 22.9) {
    $status = "Normal";
} elseif ($rumus > 22.9 && $rumus <= 24.9) {
    $status = "Lebih";
} else {
    $status = "Obesitas";
}

echo "Nama : " . $nama . "<br>";
echo "Berat badan: " . $bb . " kg\n <br>";
echo "Tinggi badan: " . $tb . " cm\n <br>";
echo "Indeks massa tubuh: " . number_format($rumus, 2) . "\n <br>";
echo "Status berat badan: " . $status . "\n <br>";

//dapat point 5
?>