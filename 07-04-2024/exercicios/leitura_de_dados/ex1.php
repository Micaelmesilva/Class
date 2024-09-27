<?php
function imprimePessoas($dados) {
foreach($dados as $d) {
echo $d["nome"] . " - ";
echo $d["idade"] . "\n";
}
}
$p1 = array("nome" => "Julio", "idade" => 25);
$p2 = array("nome" => "Maria", "idade" => 32);
$pessoas = array($p1, $p2);
imprimePessoas($pessoas);