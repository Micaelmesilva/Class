<?php
    inicio();
    function inicio(){
        echo "1- Calculadora\n";
        echo "2- Teste de Primos\n";
        echo "3- Creditos\n";
        $opcao = readline("O que deseja abrir:");
        switch ($opcao) {
            case '1':
                calculadora();
                break;
            case '2':
                teste_primos();
                break;
            case '3':
                creditos();
                inicio();
                break;
            default:
                
                echo "Opção invalida";
                $vazio = readline(" \nClique algo para continuar.");
                
                inicio();
                break;
        }
        
    }
    
    function calculadora(){
        echo "\n";
        
        $nome = readline("Informe a multiplicação: ");
        $partes = explode("*", $nome);

        if (count($partes) == 2) {
            $nome1 = $partes[0];
            $nome2 = $partes[1];

            $soma = 0;

            for ($i = 0; $i < $nome1; $i++) { 
                echo "$nome2";
                if($i != $nome1 - 1) {
                    echo " + ";
                }
                $soma += $nome2;
            }

            echo "= $soma\n";
        } else {
            echo "Formato inválido.";
        }

    }

    function teste_primos(){
        echo "\n";
        
        $primos=3;
        while ($primos > 0) {
            
            $primos = readline("Informe um primo:");

            if ($primos == 0 or $primos == 1) {
                echo "Não é primo";
                break;
            }

            for ($i=2; $i < $primos ; $i++) { 
                if ($primos % $i == 0) {
                    $primo=false;
                    break;
                }else {
                    $primo=true;
                }
            }
        }
    }
    
    
    function creditos(){
        echo "\n";
        echo "Desenvolvido por\n MICAEL";
        $vazio = readline(" \nClique algo para continuar.");
    }