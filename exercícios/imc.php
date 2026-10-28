<?php
$peso = $_POST["peso"] ?? 0;
$altura = $_POST["altura"] ?? 0;

if ($peso > 0 && $altura > 0) {
    $imc = $peso / ($altura * $altura);

    echo "Seu IMC é: " . number_format($imc, 2, ",", ".") . "<br>";

    if ($imc < 18.5) {
        echo "Abaixo do peso";
    } elseif ($imc < 25) {
        echo "Faixa de peso normal para adultos";
    } elseif ($imc < 30) {
        echo "Sobrepeso";
    } else {
        echo "Obesidade";
    }
}
?>

<form method="post">
    Peso (kg): <input type="number" step="0.1" name="peso" required><br>
    Altura (m): <input type="number" step="0.01" name="altura" required><br>
    <button type="submit">Calcular IMC</button>
</form>