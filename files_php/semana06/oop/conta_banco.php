<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conta Bancária</title>
</head>
<body>
    <?php
    class ContaBancaria {
        private $saldo = 0;

        public function depositar($valor) {
            if ($valor > 0) {
                $this->saldo += $valor;
                echo "Depósito de $valor realizado com sucesso.";
            } else {
                echo "Valor de depósito inválido.";
            }
        }

        public function sacar($valor) {
            if ($valor > 0 && $valor <= $this->saldo) {
                $this->saldo -= $valor;
                echo "Saque de $valor realizado com sucesso.";
            } else {
                echo "Valor de saque inválido ou saldo insuficiente.";
            }
        }

        public function consultarSaldo() {
            return $this->saldo;
        }
    }

    $conta = new ContaBancaria();
    $conta->depositar(1000);
    $conta->sacar(500);
    $saldoAtual = $conta->consultarSaldo();
    ?>

    <h1>Conta Bancária</h1>
    <p>Depósito e Saque Realizados:</p>
    <ul>
        <li>Depósito de R$ 1000 realizado com sucesso.</li>
        <li>Saque de R$ 500 realizado com sucesso.</li>
    </ul>
    <p>Saldo Atual: R$ <?= $saldoAtual ?></p>
</body>
</html>
