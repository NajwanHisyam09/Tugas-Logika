<?php

// echo "Urutan Perkalian:\n";

// for ($i = 1; $i <= 3; $i++) {
//     for ($j = 1; $j <= 10; $j++) {
//         $hasil = $i * $j;
//         echo "$i x $j = $hasil <br>";
//     }
// }

$bilangan1 = [1, 2, 3];
$bilangan2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    echo "Urutan perkalian <br>";

foreach ($bilangan1 as $penyebut) {
    foreach ($bilangan2 as $pembilang) {
        $hasil = $penyebut * $pembilang;
        echo $penyebut . ' x ' . $pembilang . ' = ' . $hasil . '<br>';
    }
}

// 5 point