<?php
class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual) {
        $this->salario += $this->salario * ($percentual / 100);
    }

    public function exibirInformacoes() {
        echo "Nome: {$this->nome}, Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}
?>
