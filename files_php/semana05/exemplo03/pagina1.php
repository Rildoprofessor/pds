<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: acesso_negado.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>
    <h2>Página 1</h2>
    <p>Conteúdo da Página 1.</p>
    <a href="pagina2.php">Ir para Página 2</a>
</body>
</html>
