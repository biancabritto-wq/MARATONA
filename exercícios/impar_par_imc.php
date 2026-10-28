<?php
$numero = $_POST["numero"] ?? "";

if ($numero !== "") {
    if ($numero % 2 == 0) {
        echo "O número é par.";
    } else {
        echo "O número é ímpar.";
    }
}
?>

<form method="post">
    Número: <input type="number" name="numero" required>
    <button type="submit">Verificar</button>
</form>