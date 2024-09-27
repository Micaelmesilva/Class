<?php

echo "1- sim\n";
echo "2- não\n";
$decisao = readline("Deseja informar números ou sortear? ");
echo"\n\n";
switch ($decisao) {
    case '1':
        for ($i = 0; $i < 11; $i++) { 
            $num = readline("Informe um número: ");
         
            if ($num > 0 || $num == 0) {
                echo "É positivo\n";
            } else {
                echo "É negativo\n";
            }
        }
        break;
        
    case '2':
        for ($i = 0; $i < 11; $i++) { 
            $num = rand(-999, 999);
            echo "$num\n";
            if ($num > 0 || $num == 0) {
                echo "É positivo\n";
            } else {
                echo "É negativo\n";
            }
        }
        break;
        
    default:
        
}
