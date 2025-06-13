<?php
class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao() {
        return $this->getMedia() >= 7 ? 'Aprovado' : 'Reprovado';
    }
}
?>
