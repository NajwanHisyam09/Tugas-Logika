<?php

// function hitungPembagian($angka)
// {
//     $hasilPembagian = array();

//     if ($angka % 3 === 0) {
//         $hasilPembagian[] = 3;
//     }

//     if ($angka % 5 === 0) {
//         $hasilPembagian[] = 5;
//     }

//     if ($angka % 7 === 0) {
//         $hasilPembagian[] = 7;
//     }

//     if ($angka % 10 === 0) {
//         $hasilPembagian[] = 10;
//     }

//     return $hasilPembagian;
// }

// function cetakHasil($hasilPembagian)
// {
//     if (empty($hasilPembagian)) {
//         echo "Angka 1000 tidak bisa dibagi dengan 3, 5, 7, dan 10.";
//     } else {
//         echo "Angka 1000 bisa dibagi dengan angka " . implode(", ", $hasilPembagian) . ".";
//     }
// }


// $angka = 1000;
// $hasilPembagian = hitungPembagian($angka);
// cetakHasil($hasilPembagian);

function hitungPembagian($angka)
{
    $hasilPembagian = array();

    $bil = array(3, 5, 7, 10);

    foreach ($bil as $pembagi) {
        if ($angka % $pembagi === 0) {
            $hasilPembagian[] = $pembagi;
        }
    }

    return $hasilPembagian;
}

function cetakHasil($hasilPembagian)
{
    if (empty($hasilPembagian)) {
        echo "Angka 1000 tidak bisa dibagi dengan 3, 5, 7, dan 10.";
    } else {
        echo "Angka 1000 bisa dibagi dengan angka " . implode(" dan ", $hasilPembagian) . ". <br>";
    }
}

$angka = 1000;
$hasilPembagian = hitungPembagian($angka);

cetakHasil($hasilPembagian);

echo "Hasil Pembagian: [";
foreach ($hasilPembagian as $index => $pembagi) {
    echo $pembagi;
    if ($index < count($hasilPembagian) - 1) {
        echo ", ";
    }
}
echo "]";

?>



