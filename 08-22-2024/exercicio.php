<?php

class Produto{
    private string $descricao;
    private string $unidade_medida;
    private int $quantidade;
    private float $valor_unitario;
    
    public function getValorTotal(){
        return $this->quantidade * $this->valor_unitario;
        
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

    /**
     * Get the value of unidade_medida
     */
    public function getUnidadeMedida(): string
    {
        return $this->unidade_medida;
    }

    /**
     * Set the value of unidade_medida
     */
    public function setUnidadeMedida(string $unidade_medida): self
    {
        $this->unidade_medida = $unidade_medida;

        return $this;
    }

    /**
     * Get the value of quantidade
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     */
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of vaor_unitario
     */
    public function getVaorUnitario(): float
    {
        return $this->valor_unitario;
    }

    /**
     * Set the value of vaor_unitario
     */
    public function setVaorUnitario(float $valor_unitario): self
    {
        $this->valor_unitario = $valor_unitario;

        return $this;
    }
}
$produtos = array();
for ($i=0; $i!=3 ; $i++) { 
    $produto = new Produto();
    $descricao = readline("Informe a Descrição: ");
    $unidade_medida = readline("Informe a Unidade de Medida: ");
    $quantidade = readline("Informe a Quantidade: ");
    $valor_unitario = readline("Informe o Valor: ");

    $produto ->setDescricao($descricao);
    $produto ->setUnidadeMedida($unidade_medida);
    $produto ->setQuantidade($quantidade);
    $produto ->setVaorUnitario($valor_unitario);
    

    array_push($produtos, $produto);
    system('clear');

}

foreach ($produtos as $produto) {
    echo "Produto: " . $produto->getDescricao() . " (". $produto->getUnidadeMedida() . ") " .
    $produto->getQuantidade() . "*" . $produto->getValorUnitario() . " = " . $produto->getValorTotal() . "\n";
}

//Parte 2
function bubbleSort($a)
{
    $n = count($a);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($a[$j]->getValorTotal() > $a[$j + 1]->getValorTotal()) {
                $temp = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $temp;
            }
        }
    }
    return $a;
}

$produtos_ordenados = bubbleSort($produtos);
$n = count($escolas_ordenadas);

echo "Venda com o maior valor total do produto: " . $produtos_ordenados[$n-1]->getDescricao() . 
" (". $produtos_ordenados[$n-1]->getUnidadeMedida() . ") ";