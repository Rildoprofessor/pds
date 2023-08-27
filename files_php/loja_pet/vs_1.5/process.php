<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Ler os dados do arquivo txt e verificar o login
    $users = file("users.txt", FILE_IGNORE_NEW_LINES);
    
    foreach ($users as $user) {
        $user_data = explode(" ", $user);
        if ($user_data[2] === $username && $user_data[3] === $password) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: welcome.php");
            exit();
        }
    }
    
    header("Location: user_not_found.php");
    exit();
}
?>
