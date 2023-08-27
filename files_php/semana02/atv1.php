<!DOCTYPE html>
<html>
<head>
    <title>Atividades em PHP</title>
</head>
<body>
    <?php
    // Atividade 1
    echo "<h2>Atividade 1</h2>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$i ";
    }

    // Atividade 2
    echo "<h2>Atividade 2</h2>";
    $numero = 7;
    if ($numero >= 0) {
        echo "O número é positivo.";
    } else {
        echo "O número é negativo.";
    }

    // Atividade 3
    echo "<h2>Atividade 3</h2>";
    $contador = 5;
    while ($contador <= 15) {
        echo "$contador ";
        $contador++;
    }

    // Atividade 4
    echo "<h2>Atividade 4</h2>";
    $numero = 8;
    $soma = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }
    echo "A soma dos números é: $soma";

    // Atividade 5
    echo "<h2>Atividade 5</h2>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo "$i ";
    }

    // Atividade 6
    echo "<h2>Atividade 6</h2>";
    $contador = 20;
    do {
        echo "$contador ";
        $contador--;
    } while ($contador >= 1);

    // Atividade 7
    echo "<h2>Atividade 7</h2>";
    $numeros = array(10, 15, 20, 25, 30);
    $soma = 0;
    $qtde = count($numeros);
    for ($i = 0; $i < $qtde; $i++) {
        $soma += $numeros[$i];
    }
    $media = $soma / $qtde;
    echo "A média dos números é: $media";

    // Atividade 8
    echo "<h2>Atividade 8</h2>";
    for ($i = 1; $i <= 10; $i += 2) {
        echo "$i ";
    }

    // Atividade 9
    echo "<h2>Atividade 9</h2>";
    $numero = 5;
    if ($numero % 2 == 0) {
        echo "O número é par.";
    } else {
        echo "O número é ímpar.";
    }

    // Atividade 10
    echo "<h2>Atividade 10</h2>";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0) {
            echo "$i ";
        }
    }

    // Atividade 11
    echo "<h2>Atividade 11</h2>";
    $somaImpares = 0;
    $qtdeImpares = 0;
    for ($i = 1; $i <= 100; $i += 2) {
        $somaImpares += $i;
        $qtdeImpares++;
    }
    $mediaImpares = $somaImpares / $qtdeImpares;
    echo "A média dos números ímpares é: $mediaImpares";

    // Atividade 12
    echo "<h2>Atividade 12</h2>";
    $numero1 = 25;
    $numero2 = 38;
    if ($numero1 > $numero2) {
        echo "O maior número é: $numero1";
    } else {
        echo "O maior número é: $numero2";
    }

    // Atividade 13
    echo "<h2>Atividade 13</h2>";
    $nota = 8;
    switch ($nota) {
        case 10:
            echo "Conceito A";
            break;
        case 9:
            echo "Conceito B";
            break;
        case 8:
            echo "Conceito C";
            break;
        case 7:
            echo "Conceito D";
            break;
        default:
            echo "Conceito F";
    }

    // Atividade 14
    echo "<h2>Atividade 14</h2>";
    $valorCompra = 150;
    if ($valorCompra >= 200) {
        $desconto = $valorCompra * 0.1;
        $valorPagar = $valorCompra - $desconto;
        echo "Valor a pagar com desconto: $valorPagar";
    } else {
        echo "Valor a pagar: $valorCompra";
    }

    // Atividade 15
    echo "<h2>Atividade 15</h2>";
    $numero = -7;
    if ($numero > 0) {
        echo "O número $numero é positivo.";
    } elseif ($numero < 0) {
        echo "O número $numero é negativo.";
    } else {
        echo "O número é zero.";
    }

    // Atividade 16
    echo "<h2>Atividade 16</h2>";
    $senha = "abc123";
    if ($senha == "senha123") {
        echo "Senha correta!";
    } else {
        echo "Senha incorreta!";
    }

    // Atividade 17
    echo "<h2>Atividade 17</h2>";
    $mediaAluno = 7.5;
    if ($mediaAluno >= 6) {
        echo "Aluno aprovado!";
    } else {
        echo "Aluno reprovado!";
    }

    // Atividade 18
    echo "<h2>Atividade 18</h2>";
    $mes = 4;
    switch ($mes) {
        case 1:
        case 2:
        case 3:
            echo "Verão";
            break;
        case 4:
        case 5:
        case 6:
            echo "Outono";
            break;
        case 7:
        case 8:
        case 9:
            echo "Inverno";
            break;
        case 10:
        case 11:
        case 12:
            echo "Primavera";
            break;
        default:
            echo "Mês inválido";
    }

    // Atividade 19
    echo "<h2>Atividade 19</h2>";
    $idade = 20;
    if ($idade >= 18) {
        echo "Pessoa maior de idade.";
    } else {
        echo "Pessoa menor de idade.";
    }

    // Atividade 20
    echo "<h2>Atividade 20</h2>";
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 4 == 0) {
            echo "pim ";
        } else {
            echo "$i ";
        }
    }

    // Atividade 21
    echo "<h2>Atividade 21</h2>";
    $numero = 385;
    $somaDigitos = 0;
    while ($numero > 0) {
        $digito = $numero % 10;
        $somaDigitos += $digito;
        $numero = (int)($numero / 10);
    }
    echo "A soma dos dígitos é: $somaDigitos";

    // Atividade 22


    echo "<h2>Atividade 23</h2>";
    $numero = 28;
    $divisores = array();
    for ($i = 1; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            array_push($divisores, $i);
        }
    }
    $somaDivisores = array_sum($divisores);
    if ($somaDivisores == $numero) {
        echo "O número $numero é perfeito.";
    } else {
        echo "O número $numero não é perfeito.";
    }

    // Atividade 23
    echo "<h2>Atividade 24</h2>";
    $numero = 5;
    $fatorial = 1;
    $i = 1;
    while ($i <= $numero) {
        $fatorial *= $i;
        $i++;
    }
    echo "O fatorial de $numero é: $fatorial";
    ?>
</body>
</html>
