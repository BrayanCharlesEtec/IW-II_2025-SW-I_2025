<?php

require_once "Product.class.php";

$produto = new Produto("Notebook", 3500.00, 10);

$produto->mostrarDetalhes();

$produto->adicionarEstoque(5);
$produto->removerEstoque(3);
$produto->setPreco(3400.00);

$produto->mostrarDetalhes();
