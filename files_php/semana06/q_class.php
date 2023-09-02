<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Opinião</title>
</head>
<body>
    <h1>Deixe sua Opinião</h1>
    
    <?php
    $nome = $email = $opiniao = $mensagem = '';
    $erro = false;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validando nome
        if (empty($_POST["nome"])) {
            $erro = true;
        } else {
            $nome = test_input($_POST["nome"]);
        }

        // Validando email
        if (empty($_POST["email"])) {
            $erro = true;
        } else {
            $email = test_input($_POST["email"]);
            // Verificando se o email é válido
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erro = true;
            }
        }

        // Validando opinião
        if (empty($_POST["opiniao"])) {
            $erro = true;
        } else {
            $opiniao = test_input($_POST["opiniao"]);
        }

        // Validando mensagem
        if (empty($_POST["mensagem"])) {
            $erro = true;
        } else {
            $mensagem = test_input($_POST["mensagem"]);
        }

        // Se não houver erro, salvar a opinião em clientes.txt
        if (!$erro) {
            $dados = "Nome: $nome\nEmail: $email\nOpinião: $opiniao\nMensagem: $mensagem\n\n";
            file_put_contents("clientes.txt", $dados, FILE_APPEND);
            echo "<p>Obrigado por enviar sua opinião!</p>";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="opiniao">Opinião:</label>
        <textarea name="opiniao" rows="4" required></textarea><br>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" rows="4" required></textarea><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
