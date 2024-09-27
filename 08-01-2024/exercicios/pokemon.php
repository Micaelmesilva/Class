<?php

class Pokemon
{
    //Atributos: características
    public $nome;
    public $tipo;

    //public $ataque;
    //public $defesa;
    //public $velocidade;

    public $nivel;
    public $pontosVida;
    public $experiencia;

    //Construtor
    function __construct()
    {
        $this->nivel = 1;
        $this->pontosVida = 10;
        $this->experiencia = 0;
    }

    //Métodos: ações
    function batalhar()
    {
        $this->aumentarExperiencia(5);
    }

    function aumentarNivel()
    {
        $this->nivel = $this->nivel + 1;
        $this->aumentarPontosVida();
        $this->experiencia = 0;
    }

    function aumentarPontosVida()
    {
        $this->pontosVida = $this->nivel * 10;
    }

    function aumentarExperiencia($exp)
    {
        $this->experiencia += $exp;
        if ($this->experiencia >= 100) {
            $this->aumentarNivel();
        }
    }

    function dados() {
        $retorno = "Nome = " . $this->nome . "\n";
        $retorno = $retorno . "Tipo = " . $this->tipo . "\n";
        $retorno = $retorno . "Nivel = " . $this->nivel . "\n";
        $retorno = $retorno . "Pontos de Vida = " . $this->pontosVida . "\n";
        $retorno = $retorno . "Experiencia = " . $this->experiencia . "\n";
        return $retorno;

    }
} //FINAL classe Pokemon

//Programa principal
$psyduck = new Pokemon();
$psyduck->nome = "Psyduck";
$psyduck->tipo = "Aquático";


$lucario = new Pokemon();
$lucario->nome = "Lucario";
$lucario->tipo = "Lutador";

for ($i = 0; $i != 100000; $i++) {
   // echo $i, "- Batalha\n";
    $psyduck->batalhar();
    $psyduck ->batalhar();

}
echo "====================================================\n";
echo $psyduck->dados();
echo "====================================================\n";
echo $psyduck ->dados();
echo "\n";
