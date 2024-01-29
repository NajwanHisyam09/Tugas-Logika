<?php

function hitungWaktuKerja($jamKerja, $istirahatShalat, $istirahatMakan)
{
    $totalMenitKerja = $jamKerja * 60;
    $totalMenitIstirahat = $istirahatShalat + $istirahatMakan;

    $waktuKerja = $totalMenitKerja - $totalMenitIstirahat;

    return [
        'waktuKerja' => $waktuKerja,
        'istirahatShalat' => $istirahatShalat,
        'istirahatMakan' => $istirahatMakan,
        'totalIstirahat' => $totalMenitIstirahat
    ];
}

function tampilkanWaktu($hasil)
{
    $jamKerja = floor($hasil['waktuKerja'] / 60);
    $menitKerja = $hasil['waktuKerja'] % 60;

    echo "Jadi waktu yang dilakukan pegawai selama 8 jam/hari yaitu sebagai berikut : <br>";
    echo "Waktu Kerja Pegawai: $jamKerja jam $menitKerja menit\n <br>";
    echo "Waktu Istirahat Shalat: {$hasil['istirahatShalat']} menit\n <br>";
    echo "Waktu Istirahat Makan: {$hasil['istirahatMakan']} menit\n <br>";
    echo "Total Waktu Istirahat: {$hasil['totalIstirahat']} menit\n <br>";
}


$jamKerja = 8;
$istirahatShalat = 20;
$istirahatMakan = 30;


$hasil = hitungWaktuKerja($jamKerja, $istirahatShalat, $istirahatMakan);
tampilkanWaktu($hasil);

?>
