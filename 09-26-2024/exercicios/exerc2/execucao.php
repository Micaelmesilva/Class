<?php

require_once("modelo/Departamento.php");
require_once("modelo/Funcionario.php");

$listaFuncionarios=array();
for ($i=0; $i!=5 ; $i++) { 
    $funcionario = new Funcionario();
    $funcionario->setNome(readline('Informe o Nome do Funcionario: '));
    $funcionario->setCargo(readline('Informe o Cargo do Funcionario: '));
    $funcionario->setSalario(readline('Informe o Salario do Funcionario: '));

    $departamento = new Departamento();
    $departamento->setNome(readline('Informe o Nome do Departamento:'));
    $departamento->setNumSala(readline('Informe o Numero da Sala: '));

    $funcionario->setDepartamento($departamento);
    array_push($listaFuncionarios, $funcionario);
}
system('clear');
foreach ($listaFuncionarios as $funcionario) {
    echo"\nNome: ". $funcionario->getNome();
    echo"\nCargo: " . $funcionario->getCargo();
    echo"\nSalario: " . $funcionario->getSalario();
    echo"\nDepartamento: " . $funcionario->getDepartamento()->getNome();
    echo"\nNúmero da Sala: " . $funcionario->getDepartamento()->getNumSala();

    echo"\n====================";
}
echo"\n";

