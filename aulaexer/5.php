<?php
include_once '5.class.php';

$func = new Funcionario("Ana", 2000);
$func->exibirInformacoes();
$func->aumentarSalario(10);
$func->exibirInformacoes();
?>
