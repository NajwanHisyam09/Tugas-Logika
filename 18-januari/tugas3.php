<?php

function ubahFormatWaktu($waktu) {
    $jamMenit = explode('.', $waktu);
    $jam = $jamMenit[0];
    $menit = isset($jamMenit[1]) ? $jamMenit[1] : '00';

    $format12jam = ($jam < 12) ? 'am' : 'pm';
    $jam12 = ($jam % 12 == 0) ? 12 : $jam % 12;

    $waktu12jam = sprintf("%02d:%s %s", $jam12, $menit, $format12jam);

    return $waktu12jam;
}

$waktu1 = '11.00';
$waktu2 = '12.45';
$waktu3 = '21.55';

$hasil1 = ubahFormatWaktu($waktu1);
$hasil2 = ubahFormatWaktu($waktu2);
$hasil3 = ubahFormatWaktu($waktu3);

echo "Waktu awal: $waktu1, Waktu diubah: $hasil1\n <br>";
echo "Waktu awal: $waktu2, Waktu diubah: $hasil2\n <br>";
echo "Waktu awal: $waktu3, Waktu diubah: $hasil3\n <br>";
// dapat 5 point
?>
