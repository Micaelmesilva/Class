<?php
//$registro1 = array("curso" => "", "ano" => "", "alunos" => "");
function total_turmas($turmas){
    $total_alunos=0;
    foreach ($turmas as $turma) {
        $total_alunos += $turma["alunos"];
    }
    echo "Total de alunos:", $total_alunos;
    echo "\n";
}

function define_curso(){
    echo "Qual Curso?\n";
    echo "1- TDS\n";
    echo "2- Edificaçoes\n";
    echo "3- Meio Ambiente\n";
    echo "4- Aquicultura\n";
    $variable = readline("Informe: \n");

    switch ($variable) {
        case '1':
        return "TDS";
        break;

        case '2':
        return "Edificaçoes";
        break;

        case '3':
        return "Meio Ambiente";
        break;

        case '4':
        return "Aquicultura";
        break;

        default:
        # code...
        break;
    }
}

function define_ano(){
    echo "Qual ano?\n";
    echo "1\n";
    echo "2\n";
    echo "3\n";
    echo "4\n";
    $variable = readline("Informe: \n");

    switch ($variable) {
        case '1':
        return 1;
        break;

        case '2':
        return 2;
        break;

        case '3':
        return 3;
        break;

        case '4':
        return 4;
        break;

        default:
        # code...
        break;
    }
}

function define_qtdAlunos(){
    $num=readline("Quantidade de Alunos da sala: ");
    system('clear');
    return $num;
}



$turmas = array();
$num_turmas=readline("Informe a Quantidade de Turmas: ");
for ($i=0; $i!=$num_turmas ; $i++) { 
    $curso=define_curso();
    $ano=define_ano();
    $alunos=define_qtdAlunos();
    $turma["curso"] = $curso;
    $turma["ano"] = $ano;
    $turma["alunos"] = $alunos;
    array_push($turmas, $turma);
}

total_turmas($turmas);

