<?php
class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            return true;
        }
        return false;
    }

    public function devolver() {
        $this->disponivel = true;
    }

    public function exibirStatus() {
        $status = $this->disponivel ? "Disponível" : "Emprestado";
        return "<pre>Título: " . $this->titulo . "\nAutor: " . $this->autor . "\nStatus: " . $status . "</pre>";
    }
}
?>