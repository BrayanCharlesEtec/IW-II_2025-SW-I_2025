<?php
include_once '6.class.php';

$ret = new Retangulo(5, 3);
echo "Área: " . $ret->calcularArea() . "<br>";
echo "Perímetro: " . $ret->calcularPerimetro();
?>
