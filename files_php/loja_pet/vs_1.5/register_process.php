<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $user_data = "$firstname $lastname $username $password\n";
    
    // Adicionar os dados ao arquivo txt
    file_put_contents("users.txt", $user_data, FILE_APPEND);
    
    header("Location: login.php");
    exit();
}
?>
