<?php
$entrevistas=0;
while ($entrevistas != 5) {
    $entrevistas++;
    $nome = readline("Informe o nome: ");
    $peso = readline("\nInforme o peso:");
    $altura = readline("\nInforme a altura:");
    $IMC = $peso/pow($altura, 2);

    printf("\n%s tem peso %dkg, altura %.2fm e IMC %.2f\n", $nome, $peso, $altura, $IMC);
 
}