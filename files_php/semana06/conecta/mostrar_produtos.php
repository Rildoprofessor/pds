<!DOCTYPE html>
<html>
<head>
    <title>Produtos na Loja</title>
</head>
<body>
    <h1>Produtos na Loja</h1>
    
    <?php
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'loja';
    
    $conn = mysqli_connect($host, $user, $password, $database);

    if (!$conn) {
        echo "Não foi possível conectar à base de dados.";
        exit();
    }

    $query = "SELECT * FROM produtos";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<li>Nome: " . $row["nome_do_produto"] . ",
             Preço: " . $row["preco"] . ", Descrição: " . 
             $row["descricao"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum produto encontrado.";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
