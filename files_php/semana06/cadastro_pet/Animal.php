<?php
class Animal {
    // Propriedades comuns a todos os animais
    protected $especie;
    protected $nome;

    public function __construct($especie, $nome) {
        $this->especie = $especie;
        $this->nome = $nome;
    }

    // Método para obter os detalhes do animal (será sobrescrito nas subclasses)
    public function getDetalhes() {
        return "Espécie: $this->especie, Nome: $this->nome";
    }
}
?>
