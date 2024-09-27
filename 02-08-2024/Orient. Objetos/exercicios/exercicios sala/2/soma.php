<?php
for ($i = 0; $i < 101; $i++) {
    echo "$i, ";
    if($i==100){
        $soma= ($i*($i+1))/2;
        echo "\n soma final: $soma\n";
    }
}