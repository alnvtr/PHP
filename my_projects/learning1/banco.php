<?php

$contascorrentes = [12345678910 =>['titular' => 'Vinicius', 'Saldo' => 1000],
    12345678911 => ['titular' => 'Maria' , 'Saldo' => 10000],
    12345678912 =>['titular' => 'Alberto', 'Saldo' => 300]];

$contascorrentes[12345678911]['Saldo'] -= 500;


foreach  ($contascorrentes as $cpf => $conta) {
    echo  $cpf . " $conta[titular] " . "$conta[Saldo] " .  PHP_EOL;
    if (500 > $contascorrentes[12345678911]['saldo'] -= 500){
        echo "Você não pode sacar este valor!";
    }else {
        $contascorrentes[12345678911]['saldo'] -= 500;

    }

}