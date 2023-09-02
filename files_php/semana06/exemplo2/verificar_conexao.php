<!DOCTYPE html>
<html>
<head>
    <title>Verificar Conexão</title>
</head>
<body>
    <h1>Verificar Conexão com a Base de Dados</h1>

    <?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "loja";

    $conn = mysqli_connect($host, $user, $password, $database);

    if ($conn) {
        echo "<p>Conexão com o banco de dados bem-sucedida!</p>";
        mysqli_close($conn);
    } else {
        echo "<p>Falha na conexão com o banco de dados.</p>";
    }
    ?>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>
