<?php
require_once '4.class.php';

$livro = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien");
echo $livro->exibirStatus() . "\n";
$livro->emprestar();
echo $livro->exibirStatus() . "\n";
$livro->devolver();
?>