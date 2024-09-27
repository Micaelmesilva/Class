<?php
$vetorA = array();
$vetorB = array();

echo "Informe 5 palavras.\n";

for ($i=0; $i <5 ; $i++) { 
    $vetorA [$i]= readline("Palavra:");
    
   
}

foreach ($vetorA as $palavras) {
    array_push($vetorB, $palavras);
}
echo "palavras de B:\n";
foreach ($vetorB as $palavras2) {
    echo $palavras2, "\n";
}