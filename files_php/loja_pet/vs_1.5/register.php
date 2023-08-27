<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form method="post" action="register_process.php">
        <label for="firstname">Nome:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>
        
        <label for="lastname">Sobrenome:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>
        
        <label for="username">Usuário (Login):</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
