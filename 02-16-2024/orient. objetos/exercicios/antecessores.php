<?php
$num = readline("informe um número:");
if ($num==0) {
    echo"antecessor negativo\n";
}
for ($num; $num!=0 ; $num--) { 
    echo "$num";
}