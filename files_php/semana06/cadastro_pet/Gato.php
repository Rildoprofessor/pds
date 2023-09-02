<?php
require_once 'Animal.php';

class Gato extends Animal {
    private $pelagem;

    public function __construct($nome, $pelagem) {
        parent::__construct("Gato", $nome);
        $this->pelagem = $pelagem;
    }

    public function getDetalhes() {
        $detalhesComuns = parent::getDetalhes();
        return "$detalhesComuns, Pelagem: $this->pelagem";
    }
}
?>
