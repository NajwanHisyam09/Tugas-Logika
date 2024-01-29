<?php

$jam = 16;
$menit = 0;

if (($jam >= 7 && $jam < 11) || ($jam == 11 && $menit < 30)) {
    echo "waktu kerja.";
} elseif ($jam == 11 && $menit >= 30 || ($jam == 12 && $menit <= 15)) {
    echo "waktu istirahat.";
} elseif (($jam >= 12 && $menit > 15) || ($jam < 16)) {
    echo "waktu kerja.";
} else {
    echo "Gausah Kerja.";  
}

?>