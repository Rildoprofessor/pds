<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Animais</title>
</head>
<body>
    <h1>Lista de Animais</h1>
    <?php
    // Lê o arquivo de animais
    $arquivo = file_get_contents("animais.txt");

    // Divide o arquivo em linhas
    $linhas = explode(PHP_EOL, $arquivo);

    // Exibe os detalhes de cada animal
    foreach ($linhas as $linha) {
        echo "<p>$linha</p>";
    }
    ?>
</body>
</html>
