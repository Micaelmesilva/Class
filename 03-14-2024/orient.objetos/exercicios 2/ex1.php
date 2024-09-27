<?php
$num = 0;
 $numeros = array();
 $vetor1 = array();
 $vetor2 = array();
 $vetor3 = array();

  for ($i=0; $i < 5 ; $i++) { 
    $num = readline("Informe 1 número: ");
    array_push($numeros, $num);
    
  }
  foreach ($numeros as $a) {
    array_push($vetor1, $a);
    array_push($vetor2, $a);
    array_push($vetor3, $a);
  }
 
