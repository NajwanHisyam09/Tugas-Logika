<?php

function hitungSuku($a, $n)
{
    return $a * 4 + $n * 3;
}

$a = 9;

echo "Suku-suku dari rumus a*4+n*3 dengan a = 9:\n <br>";
for ($n = 1; $n <= 12; $n++) {
    $suku = hitungSuku($a, $n);
    echo "Suku ke-$n: $suku\n <br>";
}

?>
