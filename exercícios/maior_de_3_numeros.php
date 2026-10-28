<?php
$n1 = $_POST["n1"] ?? 0;
$n2 = $_POST["n2"] ?? 0;
$n3 = $_POST["n3"] ?? 0;

if ($n1 >= $n2 && $n1 >= $n3) {
    echo "O maior número é: " . $n1;
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    echo "O maior número é: " . $n2;
} else {
    echo "O maior número é: " . $n3;
}
?>

<form method="post">
    Número 1: <input type="number" name="n1" required><br>
    Número 2: <input type="number" name="n2" required><br>
    Número 3: <input type="number" name="n3" required><br>
    <button type="submit">Ver maior</button>
</form>