<?php
$vetorA = array(1,2,3,4,5);
$vetorB = array(1,2,3,4,5);
$vetorC = array();
$vetorD = array();
$i=0;
// Preenche os vetores com números aleatórios de 1 a 10

foreach ($vetorA as $numA) {
    
foreach ($vetorB as $numB) {
    $i++;
        if ($numA==$numB) {
            $vetorC [$i]=$numA;
        }
    }
}
foreach ($vetorC as $numC) {
    echo $numC;
    echo", ";
}
echo"\n";