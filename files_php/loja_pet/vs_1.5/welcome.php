<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION["username"]; ?>!</h1>
    <p>Esta é uma página restrita.</p>
</body>
</html>
