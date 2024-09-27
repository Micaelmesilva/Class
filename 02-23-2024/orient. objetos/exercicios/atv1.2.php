<?php
teste_primos();
function teste_primos(){
    echo "\n";
    
    $primos = 3;
    while ($primos > 0) {
        
        $primos = readline("Informe um primo: ");

        if ($primos == 0 or $primos == 1) {
            echo "Não é primo";
            break;
        }

        $primo = true;
        for ($i = 2; $i < $primos; $i++) { 
            if ($primos % $i == 0) {
                $primo = false;
                break;
            }
        }

        if ($primo) {
            echo "É primo\n";
        } else {
            echo "Não é primo\n";
        }
    }
}

