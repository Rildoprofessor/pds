<?php
require_once 'Animal.php';
require_once 'Cachorro.php';
require_once 'Gato.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $especie = $_POST["especie"];
    $nome = $_POST["nome"];

    // Cria um objeto do tipo Animal com base na espécie
    if ($especie === "cachorro") {
        $raca = $_POST["raca"];
        $animal = new Cachorro($nome, $raca);
    } elseif ($especie === "gato") {
        $pelagem = $_POST["pelagem"];
        $animal = new Gato($nome, $pelagem);
    }

    // Armazena os detalhes do animal em um arquivo de texto
    file_put_contents("animais.txt", $animal->getDetalhes() . PHP_EOL, FILE_APPEND);

    echo "<h1>Cadastro Concluído</h1>";
}
?>
