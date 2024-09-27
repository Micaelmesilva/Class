<?php
    echo "verificamos se o numero é primo\n";
    $num = readline("Qual número deseja que eu verifiqu: ");
    for ($num; $i != $num; $i++) { 
       if ($num % $i = 0) {
        echo "\nnão é primo\n"
        break
       }
       echo "é primo"
    }