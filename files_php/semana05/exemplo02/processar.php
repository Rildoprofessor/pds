<!DOCTYPE html>
<html>
<head>
    <title>Dados Enviados</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $mensagem = $_POST["mensagem"];
        
        echo "<h2>Dados Enviados:</h2>";
        echo "Nome: $nome<br>";
        echo "Sobrenome: $sobrenome<br>";
        echo "Mensagem: $mensagem<br><br>";
        
        echo "<p>Obrigado pelo envio!</p>";
    } else {
        echo "Acesso inválido!";
    }
    ?>
</body>
</html>
