<?php
$host = "localhost";
$user = "root";
$password = "root";
$database = "loja";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    header("Location: falha.php");
    exit();
}

$nome_do_produto = $_POST["nome_do_produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];

$query = "INSERT INTO produtos (nome_do_produto, preco, descricao) 
VALUES ('$nome_do_produto', $preco, '$descricao')";

if (mysqli_query($conn, $query)) {
    header("Location: sucesso.php");
    exit();
} else {
    header("Location: falha.php");
    exit();
}
?>