<!-- 1. Usia Andi saat ini adalah 16 tahun, sedangkan Beni 3 tahun lebih tua dibandingkan Dani yang tahun kelahirannya sana dengan Andi, lalu Eko adalah 1 lustrum (5 tahun) sebelum Beni
Antara Andi dan Eko siapakah yang lahir di tahun kabisat (4 tahun sekali). tampilkan tahun kelahiran tiap-tiap orang! -->

<?php

$usiaAndiSaatIni = 16;
$perbedaanUsiaBeniDanDani = 3;
$lustrum = 5;

$tahunKelahiranAndi = date("Y") - $usiaAndiSaatIni;

$tahunKelahiranDani = $tahunKelahiranAndi;

$tahunKelahiranBeni = $tahunKelahiranDani + $perbedaanUsiaBeniDanDani;

$tahunKelahiranEko = $tahunKelahiranBeni - $lustrum;

function isTahunKabisat($tahun) {
    return ($tahun % 4 == 0 && ($tahun % 100 != 0 || $tahun % 400 == 0));
}

if (isTahunKabisat($tahunKelahiranAndi)) {
    echo "Andi lahir di tahun kabisat.\n";
} else {
    echo "Andi tidak lahir di tahun kabisat.\n";
}

if (isTahunKabisat($tahunKelahiranEko)) {
    echo "Eko lahir di tahun kabisat.\n";
} else {
    echo "Eko tidak lahir di tahu\n kabisat.\n";
}

echo "Tahun kelahiran Andi: " . $tahunKelahiranAndi . "\n";
echo "Tahun kelahiran Dani: " . $tahunKelahiranDani . "\n";
echo "Tahun kelahiran Beni: " . $tahunKelahiranBeni . "\n";
echo "Tahun kelahiran Eko: " . $tahunKelahiranEko . "\n";
?>


<!-- 2. Tahun ini SMK Wikrama menjadi tuan rumah di lomba Programing Nasional yang di ikuti oleh siswa SMP dan SMA/SMK/MA. setiap peserta yang mendaftar mendapatkan nomer peserta sesuai
dengan ketentuan dan kategori mata lomba. terdapat 3 mata lomba dengan kodenya masing-masing,yaitu :
Web APP 01W
Android 02A
Game 03G

Nomor peserta disusun dari 'Urutan Daftar ke - kategori mata Lomba - tingkan pendidikan P untuk SMP, A untuk SMA/SMK/MA - 2 digit terakhir tahun Pelaksanaan (date('Y'), substr)'
Jika terdapat 121 peserta yang sudah daftar dan tuan rumah menunjuk Eko sebagai perwakilan di mata Lomba Web APP,berapakah nomer peserta yang akan di dapat Eko!! -->

  <?php

    $jumlah = 121;
    $lomba = "web app";
    $pendidikan = "SMK";
    $tahunPelaksanaan = date('y');

    if($pendidikan == "smp"){
        $tingkat = "P";
    }  
    else{
        $tingkat = "A";
    }

    if($lomba == "web app"){
        $kode = "01W";
    } elseif($lomba == "android"){
        $kode = "02A";
    }elseif($lomba == "game"){
        $kode = "03G";
    }
    echo "Nomor Peserta Eko adalah = ". $eko = ($jumlah + 1) . $kode . $tingkat . $tahunPelaksanaan;
    echo "<br>";
    echo "========================================";

?>  



<!-- 3. Dani ingin membangun rumah disuatu komplek perumahan dengan panjang tabah 13 meter dan lebar tanah 9 meter,tetapi sebelum membangun rumah,Dani harus memberikan laporan terlebih
dahulu tipe rumah yang ingin dia buat kepada kontraktor bangunan.Dengan luas tanah yang dia punya,masuk ke kategori manakah rumah Dani nantinya. -->

Tipe 36 : <90 m2
Tipe 45 : 90 - 96 m2
Tipe 54 : 96 - 120 m2
Tipe 60 : 120 - 150 m2
Tipe 70 : >150 m2

<?php

$panjangTanah = 13; // meter
$lebarTanah = 9; // meter

$luasTanah = $panjangTanah * $lebarTanah;

if ($luasTanah < 90) {
    $tipeRumah = 'Tipe 36';
} elseif ($luasTanah >= 90 && $luasTanah <= 96) {
    $tipeRumah = 'Tipe 45';
} elseif ($luasTanah > 96 && $luasTanah <= 120) {
    $tipeRumah = 'Tipe 54';
} elseif ($luasTanah > 120 && $luasTanah <= 150) {
    $tipeRumah = 'Tipe 60';
} else {
    $tipeRumah = 'Tipe 70';
}

// hasil
echo "Luas tanah: " . $luasTanah . " m2\n";
echo "Rumah Dani masuk ke dalam kategori: " . $tipeRumah . "\n";
?>

