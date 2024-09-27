<?php
class Carta{
    private int $numero;
    private string $nome;
    
    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}

function exibeBaralho($sorteado, $baralho){
    foreach ($baralho as $carta) {
        echo"\n====================";
        echo "\nNúmero da Carta: " . $carta->getNumero . "Nome da Carta: " . $carta->getNome . "\nNúmero da Carta: " . $carta->getNumero;
    }

}

function adivinha($sorteado){
    $opcao = readline("Informe o número da Carta Sorteada: ");
    if ($opcao == $sorteado) {
        echo "Você Ganhou.";
    }else{
        echo "Tente de Novo";
    }
    $opcao = readline("Clique Enter Para Continuar");
}

$baralho = array();
echo "Criando Baralho...\n";
for ($i=0; $i != 7; $i++) { 
    $carta = new Carta();
    $nome = readline("Informe a Letra da Carta");
    $numero = readline("Informe o Número da Carta");

    $carta->setNome($nome);
    $carta->setNumero($numero);
    array_push($baralho, $carta);
}


 $sorteado = array_rand($baralho);
 $opcao = 0;
 while ($opcao != $sorteado) {
    exibeBaralho($sorteado, $baralho);
    adivinha($sorteado);
 }

 
