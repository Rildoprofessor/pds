<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Salvar os dados em um arquivo de texto
    $dados = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem\n\n";
    file_put_contents("contatos.txt", $dados, FILE_APPEND);
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
        <p>E-mail: <?php echo $email; ?></p>
        <p>Mensagem: <?php echo $mensagem; ?></p>
    </div>
</body>
</html>
