<?php


function pacientesParaSegundaConsultaGratis(array $dadosPacientes)
{
    foreach ($dadosPacientes as $paciente) {
        if ($paciente['consultas'] == 1) {
            $pacientesPremiados[] = $paciente;
        }
    }
    return $pacientesPremiados;
}
