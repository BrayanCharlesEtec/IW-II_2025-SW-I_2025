<?php
include_once '2.class.php';

$aluno = new Aluno("João", 8, 6);

echo "Nome: " . $aluno->getNome() . "<br>";
echo "Média: " . $aluno->getMedia() . "<br>";
echo "Situação: " . $aluno->verificarSituacao();
?>
