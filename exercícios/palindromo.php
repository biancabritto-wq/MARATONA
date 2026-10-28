<?php
$palavra = $_POST["palavra"] ?? "";

if ($palavra != "") {
    $invertida = strrev($palavra);

    if ($palavra == $invertida) {
        echo "É um palíndromo!";
    } else {
        echo "Não é um palíndromo!";
    }
}
?>

<form method="post">
    Digite uma palavra:
    <input type="text" name="palavra" required>
    <button type="submit">Verificar</button>
</form>