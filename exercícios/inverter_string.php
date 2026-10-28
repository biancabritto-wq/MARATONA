<?php
$texto = $_POST["texto"] ?? "";

$invertido = strrev($texto);

echo "Texto invertido: " . $invertido;
?>
<form method="post">
    Digite uma palavra:
    <input type="text" name="texto">
    <button type="submit">Inverter</button>
</form>