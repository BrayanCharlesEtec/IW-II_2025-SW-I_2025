<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function adicionarEstoque($qtd) {
        $this->quantidade += $qtd;
    }

    public function removerEstoque($qtd) {
        if ($qtd > $this->quantidade) {
            echo "Quantidade insuficiente no estoque.<br>";
        } else {
            $this->quantidade -= $qtd;
        }
    }

    private function formatarPreco($valor) {
        $partes = explode('.', sprintf('%.2f', $valor));
        $inteiro = $partes[0];
        $decimal = $partes[1];

        $inteiro_formatado = '';
        $len = strlen($inteiro);
        for ($i = 0; $i < $len; $i++) {
            if ($i > 0 && ($len - $i) % 3 == 0) {
                $inteiro_formatado .= '.';
            }
            $inteiro_formatado .= $inteiro[$i];
        }

        return $inteiro_formatado . ',' . $decimal;
    }

    public function mostrarDetalhes() {
        echo "Produto: " . $this->nome . "<br>";
        echo "Preço: R$ " . $this->formatarPreco($this->preco) . "<br>";
        echo "Quantidade em estoque: " . $this->quantidade . "<br><br>";
    }
}

