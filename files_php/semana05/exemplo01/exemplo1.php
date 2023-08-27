<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <h2>Formulário de Contato</h2>
    
    <?php
    $nameErr = $lastNameErr = $messageErr = "";
    $name = $lastName = $message = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Nome é obrigatório";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["lastName"])) {
            $lastNameErr = "Sobrenome é obrigatório";
        } else {
            $lastName = test_input($_POST["lastName"]);
        }

        if (empty($_POST["message"])) {
            $messageErr = "Mensagem é obrigatória";
        } else {
            $message = test_input($_POST["message"]);
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
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name">
        <span class="error"><?php echo $nameErr;?></span>
        <br><br>
        
        <label for="lastName">Sobrenome:</label>
        <input type="text" id="lastName" name="lastName">
        <span class="error"><?php echo $lastNameErr;?></span>
        <br><br>
        
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message"></textarea>
        <span class="error"><?php echo $messageErr;?></span>
        <br><br>
        
        <input type="submit" name="submit" value="Enviar">
    </form>
    
    <?php
    if ($name != "" && $lastName != "" && $message != "") {
        echo "<h3>Dados enviados:</h3>";
        echo "Nome: $name<br>";
        echo "Sobrenome: $lastName<br>";
        echo "Mensagem: $message<br>";
    }
    ?>
</body>
</html>
