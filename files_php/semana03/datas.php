<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplos de funções de tempo</title>
</head>
<body>
    <?php

// Atividade 1: Explorando a Função date();
function atividade1() {
    // Exibir a data atual no formato "Dia da semana, Dia de Mês de Ano"
    $date = date("l, j \of F Y");
    echo $date . "\n";
    
    // Usar diferentes formatos de data, como "d/m/Y" para exibir a data no formato "Dia/Mês/Ano"
    $date = date("d/m/Y");
    echo $date . "\n";
    
    // Criar um calendário simples que exibe o mês atual com os números de dia da semana
    $mesAtual = date("n");
    $anoAtual = date("Y");
    $diasNoMes = date("t");
    
    echo "Calendário para o mês $mesAtual/$anoAtual:\n";
    
    for ($dia = 1; $dia <= $diasNoMes; $dia++) {
        $diaDaSemana = date("N", strtotime("$anoAtual-$mesAtual-$dia"));
        echo str_repeat("   ", $diaDaSemana - 1) . sprintf("% 2d", $dia);
        if ($diaDaSemana == 7 || $dia == $diasNoMes) {
            echo "\n";
        }
    }
}

// Atividade 2: Explorando a Função time();
function atividade2() {
    // Calcular a quantidade de segundos desde uma data específica até o momento atual
    $timestampEspecifico = strtotime("2023-01-01");
    $tempoAtual = time();
    $diferencaSegundos = $tempoAtual - $timestampEspecifico;
    
    echo "Diferença em segundos: $diferencaSegundos\n";
    
    // Converter para minutos, horas e dias
    
// Defina a data de referência (pode ser qualquer data que você desejar)
//$dataReferencia = strtotime("2023-01-01");

// Calcule a diferença de segundos entre a data de referência e o momento atual
$diferencaSegundos = time();// - $dataReferencia;

$diferencaMinutos = floor($diferencaSegundos / 60);
$diferencaHoras = floor($diferencaSegundos / 3600);
$diferencaDias = floor($diferencaSegundos / 86400);

echo "Diferença em minutos: $diferencaMinutos\n";
echo "Diferença em horas: $diferencaHoras\n";
echo "Diferença em dias: $diferencaDias\n";
}

// Atividade 3: Usando Valores Epoch na Função date();
function atividade3() {
    // Usar valor Epoch para formatar uma data usando a função date();
    $timestampEpoch = 1629801600; // Exemplo de valor Epoch
    $dataFormatada = date("d/m/Y H:i:s", $timestampEpoch);
    echo $dataFormatada . "\n";
}

// Atividade 4: Explorando a Função strtotime();
function atividade4() {
    // Calcular a data e hora daqui a uma semana usando a função strtotime();
    $dataDaquiUmaSemana = strtotime("+1 week");
    echo date("d/m/Y H:i:s", $dataDaquiUmaSemana) . "\n";
}

// Atividade 5: Usando a Classe DateTime
function atividade5() {
    // Calcular a diferença de tempo entre duas datas usando a classe DateTime
    $dataAntiga = new DateTime("2022-01-01");
    $dataAtual = new DateTime();
    $diferenca = $dataAntiga->diff($dataAtual);
    
    echo $diferenca->format("%Y anos, %m meses e %d dias") . "\n";
}

// Chamar todas as funções
atividade1();
atividade2();
atividade3();
atividade4();
atividade5();

?>

</body>
</html>