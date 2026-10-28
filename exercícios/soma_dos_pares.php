<?php
$somaPares = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $somaPares += $i;
    }
}
echo "Soma dos pares de 1 a 100: $somaPares\n";
?>