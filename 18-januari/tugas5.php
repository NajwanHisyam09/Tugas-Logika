<?php

$bilangan1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bilangan2 = [77, 99, 55, 81, 45, 90, 91, 98];

function buatKelompok($array1, $array2) {
    $kelompokPertama = array_intersect($array1, $array2);

    $kelompokKedua = array_merge(array_diff($array1, $array2), array_diff($array2, $array1));

    return ['Kelompok Pertama' => $kelompokPertama, 'Kelompok Kedua' => $kelompokKedua];
}

$kelompok = buatKelompok($bilangan1, $bilangan2);

echo "Kelompok Pertama: [";
echo implode(", ", $kelompok['Kelompok Pertama']);
echo "]\n";

echo "Kelompok Kedua: [";
echo implode(", ", $kelompok['Kelompok Kedua']);
echo "]\n";

// 5 point