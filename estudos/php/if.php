<?php
# if, else if, else em PHP
# Operadores de comparação e lógicos
# == === != <> !== > >= < <=
# and (&&) or (||) not (!)

/* $temperatura = 30;
$chovendo = FALSE;

    if ($temperatura > 27 && $chovendo) {
        echo "O dia está quente.";
        echo "<br> E está chovendo."
    } else if ($temperatura > 27) {
        echo "O dia está quente.";
    } else if ($temperatura > 20) {
        echo "O dia está agradável.";
    } else {
        echo "O dia está frio.";
    }
*/ 

$idade = 20;
$idade_minima = 18;
$e_maior = ($idade >= $idade_minima);

if ($e_maior){
    echo "Maior de idade";
} else {
    echo "Menor.";
}