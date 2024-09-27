<?php
$primos = 3;
$lista_primos = array();
$verifica = true;
while ($verifica) {

    $primos = intval(readline("Informe um primo: "));
    if ($primos < 2) {
        if ($primos <= 0) {
            $verifica = false;
            break;
        } else {
           continue; 
        }
    }

    $util = true;
    for ($i = 2; $i < $primos; $i++) {
        if ($primos % $i == 0) {

            $util = false;
        }
    }
    if ($util) {
        array_push($lista_primos, $primos);
    }
}
foreach ($lista_primos as $num) {
    echo "$num ";
}
echo"\n";

