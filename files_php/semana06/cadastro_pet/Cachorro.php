<?php
require_once 'Animal.php';

class Cachorro extends Animal {
    private $raca;

    public function __construct($nome, $raca) {
        parent::__construct("Cachorro", $nome);
        $this->raca = $raca;
    }

    public function getDetalhes() {
        $detalhesComuns = parent::getDetalhes();
        return "$detalhesComuns, Raça: $this->raca";
    }
}
?>
