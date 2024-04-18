<?php


include "funcionalidades.php";


$dadosPacientes = [0 => ['nome' => 'Fernanda', 'consultas' => 4],
                   1 => ['nome' => 'Laura', 'consultas' => 1],
                   2 => ['nome' => 'Joaquim', 'consultas' => 1]];

$pacientesPremiados = pacientesParaSegundaConsultaGratis($dadosPacientes);

echo "Pacientes com segunda consulta grátis:" . PHP_EOL;
foreach ($pacientesPremiados as $paciente) {
    echo $paciente['nome'] . PHP_EOL;
}
