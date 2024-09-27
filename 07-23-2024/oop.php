<?php
class Monitor{

    //atributos
    public $cor;
    public $resolucao;
    public $marca;

    //metodo
    function ligar(){
    echo " Computador ligado!\n";

    }

    function desligar(){
    echo " Computador desligado\n";

    }

    function mostrarImagem(){
    echo " Computador mostrando imagem coma  resolução ", $this->resolucao,"\n";

    }
}
//programa_pincipal
$monitor1 = new Monitor();
$monitor1-> cor = "preto";
$monitor1-> resolucao = "1080x1920";
$monitor1-> cor = "AOC";
$monitor1->ligar();
$monitor1->desligar();
$monitor1->mostrarImagem();
echo "Cor do monitor 1: ", $monitor1->cor, "\n";

$monitor2 = new Monitor();
$monitor2-> cor = "Prata";
$monitor2-> resolucao = "1080x1920";
$monitor2-> cor = "Lenovo";
$monitor2->ligar();
$monitor2->desligar();
$monitor2->mostrarImagem();