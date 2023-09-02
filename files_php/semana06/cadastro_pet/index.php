<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Animais</title>
</head>
<body>
    <h1>Cadastro de Animais</h1>

    <!-- Formulário de cadastro de animais -->
    <form action="processar_cadastro.php" method="POST">
        <label for="especie">Espécie:</label>
        <select id="especie" name="especie" required>
            <option value="cachorro">Cachorro</option>
            <option value="gato">Gato</option>
        </select><br>

        <!-- Inclui campos específicos para cada espécie usando JavaScript -->
        <div id="campos-especificos">
            <!-- Os campos específicos serão adicionados aqui -->
        </div>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <input type="submit" value="Cadastrar">
    </form>

    <!-- Script JavaScript para mostrar campos específicos -->
    <script>
        const especieSelect = document.getElementById("especie");
        const camposEspecificos = document.getElementById("campos-especificos");

        // Define os campos específicos para cada espécie
        const camposCachorro = `
            <label for="raca">Raça:</label>
            <input type="text" id="raca" name="raca" required><br>
        `;

        const camposGato = `
            <label for="pelagem">Pelagem:</label>
            <input type="text" id="pelagem" name="pelagem" required><br>
        `;

        // Mostra os campos específicos quando a espécie muda
        especieSelect.addEventListener("change", () => {
            camposEspecificos.innerHTML = "";

            if (especieSelect.value === "cachorro") {
                camposEspecificos.innerHTML = camposCachorro;
            } else if (especieSelect.value === "gato") {
                camposEspecificos.innerHTML = camposGato;
            }
        });
    </script>
</body>
</html>
