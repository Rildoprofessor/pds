<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    
    // Abrir ou criar o arquivo
    $arquivo = fopen("dados.txt", "a");
    
    // Escrever os dados no arquivo
    fwrite($arquivo, "Nome: " . $nome . "\n");
    fwrite($arquivo, "Sobrenome: " . $sobrenome . "\n");
    fwrite($arquivo, "--------------------------------\n");
    
    // Fechar o arquivo
    fclose($arquivo);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Confirmação de Contato</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Obrigado pelo seu contato!</h1>
        <p>Seus dados foram recebidos com sucesso.</p>
        <p>Nome: <?php echo $nome; ?></p>
        <p>Sobrenome: <?php echo $sobrenome; ?></p>
    </div>
</body>
</html>