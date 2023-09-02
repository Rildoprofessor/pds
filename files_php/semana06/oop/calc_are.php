<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Áreas de Formas Geométricas</title>
</head>
<body>
    <?php
    class Forma {
        public function calcularArea() {
            // Implementação genérica que pode ser sobrescrita
            return 0;
        }
    }
    class Retangulo extends Forma {
        public $largura;
        public $altura;

        public function calcularArea() {
            return $this->largura * $this->altura;
        }
    }

    class Triangulo extends Forma {
        public $base;
        public $altura;

        public function calcularArea() {
            return (0.5 * $this->base * $this->altura);
        }
    }
    // Instanciando objetos das classes Retangulo e Triangulo
    $retangulo = new Retangulo();
    $retangulo->largura = 4;
    $retangulo->altura = 5;

    $triangulo = new Triangulo();
    $triangulo->base = 6;
    $triangulo->altura = 8;

    // Calculando as áreas
    $areaRetangulo = $retangulo->calcularArea();
    $areaTriangulo = $triangulo->calcularArea();
    ?>
    <h1>Áreas de Formas Geométricas</h1>
    <p>Área do Retângulo: <?= $areaRetangulo ?> unidades quadradas.</p>
    <p>Área do Triângulo: <?= $areaTriangulo ?> unidades quadradas.</p>
</body>
</html>
