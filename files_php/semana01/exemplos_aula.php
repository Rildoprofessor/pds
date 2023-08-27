<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos aula</title>

</head>
<body>
<div class="container">
    <h2>Exemplos</h2>
<?php
//Exemplo: Operador de Igualdade (==)
echo "</br><h2>Operador de Igualdade - Exemplo 01</h2></br> ";
$fruit = "banana";

if ($fruit == "maçã") {
    echo "A fruta é uma maçã.";
} else {
    echo "A fruta não é uma maçã.";
}
echo "</br><h2>Operador de Igualdade - Exemplo 02</h2></br> ";
$a = 5;
$b = "5";

if ($a == $b) {
    echo "Os valores são iguais.";
} else {
    echo " Os valores são diferentes.";
}
//exemplo Operador de Diferença 
echo "</br><h2>Operador de Diferença - Exemplo 01</h2></br> ";
$a = 5;
$b = "5";

if ($a === $b) {
    echo "Os valores e tipos são idênticos.";
} else {
    echo "Os valores e/ou tipos são diferentes.";
}

echo "</br><h2>Operador de Diferença - Exemplo 02</h2></br> ";
$language = "espanhol";

if ($language != "inglês") {
    echo "O idioma não é inglês.";
} else {
    echo "O idioma é inglês.";
}
//Operador de Maior que (>)
echo "</br><h2>Operador de Maior que (>) - Exemplo 01</h2></br> ";
$a = 15;
$b = 10;

if ($a > $b) {
    echo "O valor de a é maior que o valor de b.";
} else {
    echo "O valor de a não é maior que o valor de b.";
}

echo "</br><h2>Operador de Maior que (>) - Exemplo 02</h2></br> ";
$quantity = 5;
$minimumQuantity = 10;

if ($quantity > $minimumQuantity) {
    echo "A quantidade é maior do que o mínimo.";
} else {
    echo "A quantidade não é maior do que o mínimo.";
}

//Operador de Menor que (<)
echo "</br><h2>Operador de Menor que (<) - Exemplo 01</h2></br> ";
$a = 8;
$b = 12;

if ($a < $b) {
    echo "O valor de a é menor que o valor de b.";
} else {
    echo "O valor de a não é menor que o valor de b.";
}

echo "</br><h2>Operador de Menor que (<) - Exemplo 02</h2></br> ";
$temperature = 18;
$maxTemperature = 25;

if ($temperature < $maxTemperature) {
    echo "A temperatura está mais baixa do que o máximo permitido.";
} else {
    echo "A temperatura está igual ou acima do máximo permitido.";
}

//Operador de Maior ou Igual que (>=)
echo "</br><h2>Operador de Maior ou Igual que (>=) - Exemplo 01</h2></br> ";
$a = 10;
$b = 10;

if ($a >= $b) {
    echo "O valor de a é maior ou igual ao valor de b.";
} else {
    echo "O valor de a não é maior ou igual ao valor de b.";
}

echo "</br><h2>Operador de Maior ou Igual que (>=) - Exemplo 02</h2></br> ";
$score = 78;
$passingScore = 75;

if ($score >= $passingScore) {
    echo "Você passou no teste.";
} else {
    echo "Você não passou no teste.";
}

//Operador de Menor ou Igual que (<=)
echo "</br><h2>Operador de Menor ou Igual que (<=) - Exemplo 01</h2></br> ";
$a = 7;
$b = 9;

if ($a <= $b) {
    echo "O valor de a é menor ou igual ao valor de b.";
} else {
    echo "O valor de a não é menor ou igual ao valor de b.";
}

echo "</br><h2>Operador de Menor ou Igual que (<=) - Exemplo 02</h2></br> ";
$age = 60;
$maxAge = 65;

if ($age <= $maxAge) {
    echo "Você está na faixa etária para aposentadoria.";
} else {
    echo "Você ainda não está na faixa etária para aposentadoria.";
}
?>
</div>
</body>
</html>
