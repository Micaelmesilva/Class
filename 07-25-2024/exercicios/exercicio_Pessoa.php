<?php
class Pessoa{
    public $nome;
    public $endereco;
    public $cidade;
    public $uf;
    public $altura;


    function falar_ola(){
        echo "olá mundo, sou ", $this->nome, "\n";
    }

    function falar_endereco(){
        echo "Moro em", $this->endereco," ", $this->cidade, "/", $this->uf, "\n";
    }

    function falar_altura(){
        echo "Tenho", $this->altura, "metros!\n";
    }
}

$pessoa1 = new Pessoa();
$pessoa1 ->nome  = readline("Informe Seu Nome:");
$pessoa1 -> altura = readline("Informe Sua Altura:");
$pessoa1 ->endereco = readline("Informe Seu Endereço:");
$pessoa1 ->cidade = readline("Informe Sua Cidade:");
$pessoa1 ->uf = readline("Informe Sua UF:");
$pessoa1 ->falar_ola();
$pessoa1 ->falar_endereco();
$pessoa1 ->falar_altura();

