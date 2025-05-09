<?php
    include_once  'Lampada.class.php';
    $lamp1 = new Lampada();

    $lamp1 ->Fabricante = "Philipis";
    $lamp1 ->Tensao = 110;
    $lamp1 ->Potencia = 50;
    $lamp1 ->Cor = "Branca";

    $lamp1->MostrarDado();

    $lamp1->Ligar();
    $lamp1->MostrarDado();
?>