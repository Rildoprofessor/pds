<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas Condicionais</title>
</head>
<body>
<h1>Estruturas Condicionais</h1>
<?php
//Estruturas Condicionais: if
echo "</br><h2>Exemplo 01 - IF</h2></br> ";
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}
echo "</br><h2>Exemplo 02 - IF</h2></br> ";
$numero = 20;

if ($numero >= 10) {
    echo "o numero $numero é maior que 10.";
}

//Estruturas Condicionais: Else
echo "</br><h2>Exemplo 01 - ELSE</h2></br> ";
$idade = 15;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}

echo "</br><h2>Exemplo 02 - ELSE</h2></br> ";

$nota = 65;

if ($nota >= 70) {
    echo "Você passou na prova.";
} else {
    echo "Infelizmente, você não passou na prova.";
}


//Estruturas Condicionais: Else If 
echo "</br><h2>Exemplo 01 - Else If </h2></br> ";
$nota = 85;

if ($nota >= 90) {
    echo "Conceito: A";
} else if ($nota >= 80) {
    echo "Conceito: B";
} else if ($nota >= 70) {
    echo "Conceito: C";
} else if ($nota >= 60) {
    echo "Conceito: D";
} else {
    echo "Conceito: F";
}

echo "</br><h2>Exemplo 02 - Else If </h2></br> ";
$hora = 14;

if ($hora < 12) {
    echo "Bom dia!";
} else if ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!";
} else {
    echo "Boa noite!";
}

?>

</body>
</html>
