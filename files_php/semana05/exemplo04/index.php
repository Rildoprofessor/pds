<?php
if (!isset($_COOKIE['access_info'])) {
    $access_info = [];
} else {
    $access_info = json_decode($_COOKIE['access_info'], true);
}

$access_info[] = ['date' => date('Y-m-d H:i:s'), 'page' => 'Página 1'];
setcookie('access_info', json_encode($access_info), time() + 3600, '/'); // Cookie válido por 1 hora
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página 1</title>
</head>
<body>
    <h1>Página 1</h1>
    <p>Este é o conteúdo da Página 1.</p>
    <a href="page2.php">Ir para Página 2</a>
</body>
</html>
