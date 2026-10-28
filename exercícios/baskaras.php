<?php  
$a = 1; $b = -3; $c = 2;
$delta = ($b ** 2) - (4 * $a * $c);
if ($delta < 0) {
    echo "Não possui raízes reais.\n";
} else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "x1 = $x1 | x2 = $x2\n";
}
?>