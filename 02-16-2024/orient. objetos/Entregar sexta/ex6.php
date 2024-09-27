<?php

$nome = "2*4";
$partes = explode("*", $nome);

if (count($partes) == 2) {
    $nome1 = $partes[0];
    $nome2 = $partes[1];
    
    echo "nome1: $nome1\n";
    echo "nome2: $nome2\n";
} else {
    echo "Formato inválido.";
}
