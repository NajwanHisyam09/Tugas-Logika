<?php

$barang = [
    [
        'nama' => 'Ban',
        'diskon' => 10,
    ],
    [
        'nama' => 'oli mesin',
    ],
    [
        'nama' => 'Kampas rem',
    ],
    [
        'nama' => 'busi',
        'diskon' => 9,
    ],
    [
        'nama' => 'Akumulator',
        'diskon' => 7,
    ],
];

    echo "Barang-Barang  yang memiliki diskon: <br>";

foreach ($barang as $item) {
    if (isset($item['diskon'])) {
        
        echo 'Nama: ' . $item['nama'] . ', Diskon: ' . $item['diskon'] . '% <br>';
    }
}

// 5 point 