<?php

class Carro
{
    private $modelo;
    private $marca;
    private $anoFab;
    private $vmmax;



    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of anoFab
     */
    public function getAnoFab()
    {
        return $this->anoFab;
    }

    /**
     * Set the value of anoFab
     */
    public function setAnoFab($anoFab): self
    {
        $this->anoFab = $anoFab;

        return $this;
    }

    /**
     * Get the value of vmmax
     */
    public function getVmmax()
    {
        return $this->vmmax;
    }

    /**
     * Set the value of vmmax
     */
    public function setVmmax($vmmax): self
    {
        $this->vmmax = $vmmax;

        return $this;
    }
}

$carros = array();
for ($i = 0; $i < 3; $i++) {
    $car = new Carro();
    $modelo = readline("Informe o Modelo: ");
    $marca = readline("Informe a Marca: ");
    $anoFab = readline("Informe o Ano de Fabricação: ");
    $vmmax = readline("Informe a Velocidade Maxima: ");

    $car->setModelo($modelo);
    $car->setMarca($marca);
    $car->setAnoFab($anoFab);
    $car->setVmmax($vmmax);

    array_push($carros, $car);
    system('clear');
}

function bubbleSort($carros)
{
    $n = count($carros);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($carros[$j]->getVmmax() > $carros[$j + 1]->getVmmax()) {
                $temp = $carros[$j];
                $carros[$j] = $carros[$j + 1];
                $carros[$j + 1] = $temp;
            }
        }
    }
    return $carros;
}

$carrosOrdenados = bubbleSort($carros);
$n = count($carrosOrdenados);


//Maior velocidade
echo  "O Modelo: " . $carrosOrdenados[$n-1]->getModelo() . "\nMarca: " . $carrosOrdenados[$n-1]->getMarca() . " \nAno de Fabricação: " . $carrosOrdenados[$n-1]->getAnoFab() . "\n Velocidade Maxima: " . $carrosOrdenados[$n-1]->getVmmax() . "\n";

//Menor velocidade
echo "O Modelo: " . $carrosOrdenados[0]->getModelo() . "\nMarca: " . $carrosOrdenados[0]->getMarca() . " \nAno de Fabricação: " . $carrosOrdenados[0]->getAnoFab() . "\n Velocidade Maxima: " . $carrosOrdenados[0]->getVmmax() . "\n";
