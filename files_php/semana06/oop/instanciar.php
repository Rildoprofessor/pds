<?php
class Pessoa {
    public $nome;

    public function dizerOla() {
        return "Olá, meu nome é {$this->nome}!";
    }
}

// Instanciando a classe Pessoa com o nome "Laura"
$laura = new Pessoa();
$laura->nome = "Laura";

// Chamando o método dizerOla() para "Laura"
$saudacaoLaura = $laura->dizerOla();

// Instanciando a classe Pessoa com o nome "Pedro"
$pedro = new Pessoa();
$pedro->nome = "Pedro";

// Chamando o método dizerOla() para "Pedro"
$saudacaoPedro = $pedro->dizerOla();
?>
