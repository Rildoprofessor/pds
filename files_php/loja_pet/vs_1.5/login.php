<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro - Loja de Pets</title>
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<header>
    <h1 class="texto_h1">Loja de Pets</h1>
    <h2>O melhor lugar para encontrar seu companheiro!</h2>
    <nav class="menu">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="produtos.html">Produtos</a></li>
            <li><a href="servicos.html">Serviços</a></li>
            <li><a href="avaliar.html">Avaliar</a></li>
            </ul>
    </nav>
</header>
<br>
<form method="post" action="process.php">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
 <br>
    <a href="register.php"><button>cadastre-se!</button></a>
</body>
</html>
