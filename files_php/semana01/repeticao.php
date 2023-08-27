<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>
<body>
<h1>Estruturas de Repetição</h1>
<?php 
//Estruturas de Repetição: for
echo "</br><h2>Exemplo 01 - for</h2></br> ";
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i<br>";
}

echo "</br><h2>Exemplo 02 - for</h2></br> ";
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i;
}
echo "A soma dos números de 1 a 10 é: " . $sum;


//Estruturas de Repetição: while
echo "</br><h2>Exemplo 01 - while</h2></br> ";
$contador = 1;

while ($contador <= 5) {
    echo "Contagem: $contador<br>";
    $contador++;
}

echo "</br><h2>Exemplo 02 - while</h2></br> ";
$num = 100;
while ($num % 7 != 0) {
    $num++;
}
echo "O primeiro múltiplo de 7 acima de 100 é: " . $num;

//Estruturas de Repetição: do while 
echo "</br><h2>Exemplo 01 - do while </h2></br> ";
$contador1 = 1;

do {
    echo "Contagem: $contador1<br>";
    $contador1++;
} while ($contador1 <= 5);

echo "</br><h2>Exemplo 02 - do while </h2></br> ";
$numero = 10;

do {
    echo "Número: $numero <br>";
    $numero -= 2;
} while ($numero >= 0);

?>

</body>
</html>
