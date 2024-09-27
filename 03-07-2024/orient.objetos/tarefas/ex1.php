<?php

$nuemros = array();
for ($i=0; $i < 10; $i++) { 
    $numeros [$i] = intval(readline("Digite um número inteiro: "));
    
}

$soma=0;
for ($i=0; $i < 10; $i++) { 
    $soma += $numeros [$i];
}
$media=$soma/10;
echo $soma, "\n";
echo $media, "\n";