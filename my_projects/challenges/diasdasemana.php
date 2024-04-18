<?php

$semana = ['segunda', 'terça', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'];
//entrada do dia.
echo 'Qual dia da semana começou o mes? ';
$primeirodiames = readline();
//printar os dias da semana
$indiceinicio = array_search($primeirodiames, $semana);
$indicefim = 8;
$diasselecionados = array_slice($semana, $indiceinicio, $indicefim - $indiceinicio + 1);
$c = 0;
for($i = 1; $i <= 31; $i++) {


    if ($i == 1) {
        foreach ($diasselecionados as $dias)
        {
            $c++;
            echo $dias . PHP_EOL;
        }
    }
    else
    {
            foreach ($semana as $dias)
            {
                $c++;
              if ($c > 31)
           {
                break;
            }
        echo $dias . PHP_EOL;
        }
    }
}




