<?php
class Escola{
    private string $nome;
    private string $endereco;
    private int $qtd_alunos;


    public function getNome(): string{
        return $this->nome;
    }


    public function setNome(string $nome): self{
        $this->nome = $nome;

        return $this;
    }


    public function getEndereco(): string{
        return $this->endereco;
    }


    public function setEndereco(string $endereco): self{
        $this->endereco = $endereco;

        return $this;
    }

    public function getQtdAlunos(): string{
        return $this->qtd_alunos;
    }


    public function setQtdAlunos(string $qtd_alunos): self{
        $this->qtd_alunos = $qtd_alunos;

        return $this;
    }
    
}
$escolas =  array();
for ($i=0; $i!=4; $i++) { 
    $escola = new Escola();
    $nome = readline("Informe o Nome: ");
    $endereco = readline("Informe o Endereço: ");
    $qtd_alunos = readline("Informe a Quantidade de Alunos: ");

    $escola->setNome($nome);
    $escola->setEndereco($endereco);
    $escola->setQtdAlunos($qtd_alunos);

    array_push($escolas, $escola);
    system('clear');
}

//
foreach ($escolas as $escola) {
    echo  "Nome: " . $escola->getNome() . "\nEndereço: " . $escola->getEndereco() .
" \nQuantidade de Alunos: " . $escola->getQtdAlunos() . "\n";
echo"=========================\n";
}

function bubbleSort($a)
{
    $n = count($a);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($a[$j]->getQtdAlunos() > $a[$j + 1]->getQtdAlunos()) {
                $temp = $a[$j];
                $a[$j] = $a[$j + 1];
                $a[$j + 1] = $temp;
            }
        }
    }
    return $a;
}

echo"\n";
$escolas_ordenadas = bubbleSort($escolas);
$n = count($escolas_ordenadas);

echo "Escola com Mais Alunos\n";
echo  "Nome: " . $escolas_ordenadas[$n-1]->getNome() . "\nEndereço: " . $escolas_ordenadas[$n-1]->getEndereco() .
" \nQuantidade de Alunos: " . $escolas_ordenadas[$n-1]->getQtdAlunos() . "\n";



