<?php
if (!isset($_COOKIE['access_info'])) {
    $access_info = [];
} else {
    $access_info = json_decode($_COOKIE['access_info'], true);
}

$access_info[] = ['date' => date('Y-m-d H:i:s'), 'page' => 'Página 2'];
setcookie('access_info', json_encode($access_info), time() + 3600, '/'); // Cookie válido por 1 hora
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página 2</title>
</head>
<body>
    <h1>Página 2</h1>
    <p>Este é o conteúdo da Página 2.</p>
    <a href="index.php">Voltar para Página 1</a>
</body>
</html>
