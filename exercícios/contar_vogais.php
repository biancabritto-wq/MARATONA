<!DOCTYPE html>
<html>
    <head>
        <title> Contar Vogais </title>
    </head>
    <body>
        <h2>Contar Vogais</h2>
        <form method = "POST">
            Digite uma palavra ou frase:
            <input type = "text" name = "texto" required>
            <button type = "submit">Contar</button>
        </form>
        
        <?php
        if (isset($_POST['texto'])) {
            $texto = strtolower($_POST['texto']);
            $vogais = 0;
            
            for ($i = 0; $i < strlen($texto); $i++) {
                if (in_array($texto[$i], ['a', 'e', 'i', 'o', 'u'])) {
                    $vogais++;
                }
            }
            echo "A quantidade de vogais é: $vogais";
        }
        ?>
    </body>
</html>