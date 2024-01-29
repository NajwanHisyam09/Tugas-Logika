<?php

$student = [
    [
        'nama'=> 'Andi',
        'nilai'=> [80, 78, 82, 88],
    ],
    [
        'nama'=> 'Beni',
        'nilai'=> [86, 70, 80, 85, 81],
    ],
    [
        'nama'=> 'Dani',
        'nilai'=> [83, 91, 70, 73, 81],
    ],
    [
        'nama'=> 'Eko',
        'nilai'=> [89, 85, 84, 86, 88],
    ],
];

    echo "Jadi Total nilainya sebagai berikut :<br>";

foreach ($student as $data) {
    $nama = $data['nama'];
    $nilai = $data['nilai'];
    
    $jumlahNilai = array_sum($nilai);

    echo "Total nilai untuk $nama: $jumlahNilai<br>";
}

// 5 point