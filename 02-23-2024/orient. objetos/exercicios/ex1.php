<?php

    informar_r();
    function informar_r(){
        for ($i=0; $i != 3 ; $i++) { 

            echo "\n";
            $raio = readline("Informe um raio: ");
            calcula_a($pi = 3.1415926, $raio);
            
        }
        
    }
    function calcula_a($raio, $pi){
        
        $area = $pi * pow($raio, 2);
        $tamanho = 2*$pi*$raio;
        echo "\nÁrea: $area";
        echo "\nComprimento: $tamanho\n";
    }