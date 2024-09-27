<?php
class Receita{
    private float $valor;
    private string $descricao;

    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    
}

class Despesa{
    private float $valor;
    private string $descricao;


    /**
     * Get the value of valor
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor(float $valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    
}

$receitas = array();
$despesas = array();
$opcao = 1;
while ($opcao != 0) {
    echo"Informe o Que Você Deseja.";
    echo"\n1- Adicionar Receita";
    echo"\n2- Adicionar Despesa";
    echo"\n3- Listar Receitas";
    echo"\n4- Listar Despesas";
    echo"\n5- Sumarizar";
    echo"\n0- Sair";
    echo"\n=========================\n";
    $opcao = readline("Informe a opção: ");
    switch ($opcao) {
        case '1':
            system('clear');
            array_push($receitas, adicionarReceita());
            system('clear');
            break;
    
        case '2':
            system('clear');
            array_push($despesas, adicionarDespesa());
            system('clear');
            break;
    
        case '3':
            system('clear');
            listarReceitas($receitas);
            system('clear');
        break;

        case '4':
            system('clear');
            listarDespesas($despesas);
            system('clear');
        break;

        case '5':
            system('clear');
            sumarizar($receitas, $despesas);
            system('clear');
        break;

        case '0':
            echo "Saindo\n";
        break;

        default:
            echo"\nEssa opção não está listada\n";
            $opcao=readline("Clique enter para continuar");
            system('clear');
    }
}


function adicionarReceita(){
    $receita = new Receita();
    $valor = readline("Informe a Entrada: ");
    $descricao = readline("Informe a Descrição da Entrada: ");

    $receita->setValor($valor);
    $receita->setDescricao($descricao);
    return $receita;
}

function adicionarDespesa(){
    $despesa = new Despesa();
    $valor = readline("Informe da Saida: ");
    $descricao = readline("Informe a Descrição da Saida: ");

    $despesa->setValor($valor);
    $despesa->setDescricao($descricao);
    return $despesa;
}

function listarReceitas($receitas){
    foreach ($receitas as $receita) {
        echo "Decrição da Receita: ". $receita->getDescricao() . "\nValor da Receita: " . $receita->getValor();
        echo "\n===================================================\n";
    }
    $tempo = readline("Pressione Enter para continuar");
}

function listarDespesas($despesas){
    foreach ($despesas as $despesa) {
        echo "Decrição da Despesa: ". $despesa->getDescricao() . "\nValor da Despesa: " . $despesa->getValor();
        echo "\n===================================================\n";
    }
    $tempo = readline("Pressione Enter para continuar");
}

function sumarizar($receitas, $despesas){
    $despesaTotal = 0;
    $receitaTotal = 0;

    foreach ($despesas as $despesa) {
        $despesaTotal = $despesaTotal + $despesa->getValor();
    }
    foreach ($receitas as $receita) {
        $receitaTotal = $receitaTotal + $receita->getValor();
    }
    echo "Saldo: " . $receitaTotal-$despesaTotal;
    echo "\nTotal de Receitas: " . $receitaTotal;
    echo "\nTotal de Despesas: " . $despesaTotal;
    echo "\n";
    $tempo = readline("Pressione Enter para continuar");

}