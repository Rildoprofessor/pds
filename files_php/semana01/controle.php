<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>
<body>
<h1>Estruturas de controle</h1>
<?php 
//Estruturas de controle: foreach
echo "</br><h2>Exemplo 01 - foreach</h2></br> ";
$cores = array("vermelho", "azul", "amarelo", "verde");

foreach ($cores as $cor) {
    echo "Cor: $cor<br>";
}


echo "</br><h2>Exemplo 02 - foreach</h2></br> ";

$alunos = array(
    "João" => 18,
    "Maria" => 20,
    "Carlos" => 19,
    "Ana" => 21
);

foreach ($alunos as $nome => $idade) {
    echo "$nome tem $idade anos.<br>";
}

//Estruturas de controle: switch
echo "</br><h2>Exemplo 01 - switch</h2></br> ";
$diaDaSemana = "quarta";

switch ($diaDaSemana) {
    case "segunda":
        echo "Hoje é segunda-feira.";
        break;
    case "quarta":
        echo "Hoje é quarta-feira.";
        break;
    default:
        echo "Hoje é um dia diferente.";
}


echo "</br><h2>Exemplo 02 - switch</h2></br> ";

$numero = 3;

switch ($numero) {
    case 1:
        echo "O número é um.";
        break;
    case 2:
        echo "O número é dois.";
        break;
    case 3:
        echo "O número é três.";
        break;
    default:
        echo "O número não é um, dois ou três.";
}

?>

</body>
</html>
