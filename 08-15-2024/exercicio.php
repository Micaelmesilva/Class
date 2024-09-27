<?php
class Veiculo{

    private $capacidade;
    private $passagensVendidas;

    public function __construct($capacidade) {

        $this->capacidade = $capacidade;
        $this->passagensVendidas = 0; 
    }
    
    public function venderPassagem($capacidade, $passagensVendidas){
        $this->passagensVendidas = $passagensVendidas;
        if ($this->passagensVendidas > $this->capacidade) {
           return false;
        }else {
            return true;
        }
    }


}
$veiculo = new Veiculo(4);
$passagensVendidas = readline("Informe quantas passagens deseja comprar: ");
if ($passagensVendidas == 0) {
    break;
}
$veiculo->setPassagensVendidas($passagensVendidas);

if (condition) {
    # code...

    /**
     * Get the value of capacidade
     */
    public function getCapacidade()
    {
        return $this->capacidade;
    }

    /**
     * Set the value of capacidade
     */
    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }

    /**
     * Get the value of passagensVendidas
     */
    public function getPassagensVendidas()
    {
        return $this->passagensVendidas;
    }

    /**
     * Set the value of passagensVendidas
     */
    public function setPassagensVendidas($passagensVendidas): self
    {
        $this->passagensVendidas = $passagensVendidas;

        return $this;
    }
}



