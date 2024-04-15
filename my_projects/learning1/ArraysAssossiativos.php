<?php
$conta1 = ['titular' => 'Vinicius', 'saldo' => 1000];
$conta2 = ['titular' => 'Maria', 'saldo' => 10000];
$conta3 = ['titular' => 'Alberto', 'saldo' => 300];
$contascorrentes = [$conta1, $conta2, $conta3,];

for ($i = 0; $i <count($contascorrentes); $i++) {
    echo $contascorrentes[$i]['titular'] . PHO_EOL;
}