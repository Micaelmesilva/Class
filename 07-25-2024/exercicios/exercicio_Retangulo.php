<?php
class Retangulo
{
    public $base = 0;
    public $altura = 0;
    function area()
    {

        return $this->base * $this->altura;
    }

    function perimetro()
    {
        return ($this->base + $this->altura) * 2;
    }
}

for ($i = 1; $i != 4; $i++) {

    echo "===========================\n";
    $retangulo = new Retangulo();
    $retangulo->base = (int)readline("Informe a Base: ");
    $retangulo->altura = (int)readline("Informe a Altura: ");


    echo "A área do retangulo",  $i, " é ", $retangulo->area(), ".\n";
    echo "O perimetro do retangulo", $i, " é ", $retangulo->perimetro(), ".\n";
    if ($i==3) {
        echo "===========================\n";
    }
}
