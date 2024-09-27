<?php
require_once('modelo/Carro.php');
require_once('modelo/Fabricante.php');

$fabricantes = array();

$volkswagem = new Fabricante();
$volkswagem->setNome('volkswagem');
$volkswagem->setSigla('VW');

$chevrolet = new Fabricante();
$chevrolet->setNome('chevrolet');
$chevrolet->setSigla('GM');

$fiat = new Fabricante();
$fiat->setNome('Fiat');
$fiat->setSigla('F');

$renault = new Fabricante();
$renault->setNome('renault');
$renault->setSigla('RN');

array_push($fabricantes, $renault, $fiat, $chevrolet, $volkswagem);

function menu($fabricantes){
    $opcao=10;
    while ($opcao!= 0) {
        echo "1- Cadastrar Carro.";
        echo "2- Excluir Carro.";
        echo "3- Listar carros.";
        echo "0- Cadastrar Carro.";
        $opcao = readline('Informe uma Opção: ');

        switch ($opcao) {
        case '1':
            system('clear');
            cadastrarCarro($fabricantes);
            system('clear');
        break;

        case '2':
            system('clear');
            excluirCarros();
            system('clear');
        break;

        case '3':
            system('clear');
            listarCarros();
            system('clear');
        break;

        case '0':
            # code...
        break;

        default:
            system('clear');
            $opcao = readline('Informe um Valor valido.');
            system('clear');
        break;
        }
    }

}

function cadastrarCarro($fabricantes){
    $carro = new Carro();
    $opcao = 10;

    $carro->getModelo(readline('Informe o Modelo: '));
    $carro->getAnoFabricacao(readline('Informe o Ano de Fabricação: '));
    $i=0;
    foreach ($fabricantes as $fabricante) {
        $i++;
        echo $i . "- " . $fabricante->getSigla;
    }
        $opcao = readline("Informe o Fabricante: ");
        switch ($opcao) {
            case '1':
                $carro->getFabricante($volkswagem);
            break;

            case '2':
                $carro->getFabricante($chevrolet);
            break;

            case '3':
                $carro->getFabricante($fiat);
            break;

            case '4':
                $carro->getFabricante($renault);
            break;
            
            default:
                system('clear');
                $opcao = readline('Informe um Valor valido.');
                system('clear');
            break;
        }
    
    return $carro;
}

function excluirCarros(){

}

function listarCarros(){

}