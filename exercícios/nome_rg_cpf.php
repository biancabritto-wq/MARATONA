<?php
$nome = $_POST["nome"] ?? "";
$rg = $_POST["rg"] ?? "";
$cpf = $_POST["cpf"] ?? "";

if ($nome != "" && $rg != "" && $cpf != "") {
    $dados = [
        "nome" => $nome,
        "rg" => $rg,
        "cpf" => $cpf
    ];

    echo "<pre>";
    echo json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    echo "</pre>";
}
?>

<form method="post">
    Nome: <input type="text" name="nome" required><br>
    RG: <input type="text" name="rg" required><br>
    CPF: <input type="text" name="cpf" required><br>
    <button type="submit">Cadastrar</button>
</form>