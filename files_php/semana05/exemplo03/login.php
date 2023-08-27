<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "123") {
        $_SESSION["loggedin"] = true;
        header("Location: pagina1.php");
    } else {
        header("Location: acesso_negado.php");
    }
}
?>
