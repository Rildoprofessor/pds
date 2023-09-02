<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Círculo</title>
</head>
<body>
    <?php
    class Circulo {
        public $raio;

        public function calcularArea() {
            return 3.14 * $this->raio * $this->raio;
        }
    }

    // Instanciando um objeto Circulo
    $circulo = new Circulo();
    $circulo->raio = 5;

    // Calculando a área do círculo
    $area = $circulo->calcularArea();
    ?>

    <h1>Área do Círculo</h1>
    <p>O raio do círculo é <?= $circulo->raio ?> unidades.</p>
    <p>A área do círculo é <?= $area ?> unidades quadradas.</p>
</body>
</html>
