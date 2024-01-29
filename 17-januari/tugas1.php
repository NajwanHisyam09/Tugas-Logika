
Najwan Hisyam <najwanhisyam378@gmail.com>
8:22 AM (0 minutes ago)
to me

<?php

$luas =4;
$sisi = 0;

for ($i = 0; $i <= $luas; $i++) {
    if ($i * $i == $luas) {
        $sisi = $i;
        $i = $luas + 1;
    }
}

echo "karena luas nya $luas maka sisi nya adalah $sisi cm.";
//3 point
?>