<?php
class Pessoa{
    private string $nome;
    private string $sobrenome;
    private int $idade;

    

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

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome(string $sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade(): int
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

$pessoas = array();
menu($pessoas);
function menu($pessoas){
    
    echo"Informe o Que Você Deseja.";
    echo"\n1- Cadastrar";
    echo"\n2- Ver Lista";
    echo"\n3- Sair";
    echo"\n=========================\n";
    $opcao = readline("Informe a opção: ");
    switch ($opcao) {
        case '1':
            system('clear');
           array_push($pessoas, cadastrar()) ;
            system('clear');
            menu($pessoas);

        case '2':
            system('clear');
            verLista($pessoas);
            system('clear');
            menu($pessoas);

        case '3':
            echo"\nEncerrando";
        break;

        default:
            echo"\nEssa opção não está lista";
            system('clear');
            menu($pessoas);
    }
}

function cadastrar(){
    $pessoa = new Pessoa();
    $nome = readline("Informe o Primeiro Nome: ");
    $sobrenome = readline("Informe o Sobrenome: ");
    $idade = readline("Informe a Idade: ");

    $pessoa->setNome($nome);
    $pessoa->setSobrenome($sobrenome);
    $pessoa->setIdade($idade);
    
    $tempo = readline("Clique Enter Para Continuar");
    return $pessoa;
}
function verLista($pessoas){
    foreach ($pessoas as $pessoa) {
        echo  "Nome: " . $pessoa->getNome() . " " . $pessoa->getSobrenome() .
        " \nIdade: " . $pessoa->getIdade() . "\n";
        echo"=========================\n";
    }
    $tempo = readline("Clique Enter Para Continuar");

}