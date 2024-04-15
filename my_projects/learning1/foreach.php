<?php
/*$conta1 = ['titular' => 'Vinicius', 'Saldo' => 1000];
$conta2 = ['titular' => 'Maria' , 'Saldo' => 10000];
$conta3 = ['titular' => 'Alberto', 'Saldo' => 300];

$contascorrentes = [(indices)12345678910 => $conta1,
                             12345678911 => $conta2,
                             12345678912 =>$conta3];
foreach ($contascorrentes as $cpf => $conta){
    echo "$conta[titular] " . $cpf . PHP_EOL;
}*/


$contascorrentes = [12345678910 =>['titular' => 'Vinicius', 'Saldo' => 1000],
                    12345678911 => ['titular' => 'Maria' , 'Saldo' => 10000],
                    12345678912 =>['titular' => 'Alberto', 'Saldo' => 300]];
//para adicionar um novo ítem(conta) a lista($contascorrentes)

$contascorrentes[12345678913] = ['titular' => 'Claudia', 'saldo' => 2000];


foreach  ($contascorrentes as $cpf => $conta) {
    echo "$conta[titular] " . $cpf . PHP_EOL;
}