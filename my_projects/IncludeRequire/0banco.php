<?php
//include '0funcoes.php';//inclui outro arquivo de código aqui mas não avisa caso a pasta não seja encontrada.
//require '0funcoes.php';//inclui outro arquivo de código aqui mas avisa caso a pasta não seja encontrada.
require_once '0funcoes.php';//também inclui outro arquivo porém verifica se este mesmo arquivo já foi importado e não importa novamente.


//->contas cadastradas no banco do amor.
$contascorrentes = [
    '123.456.879-10' => ['titular' => 'Thiago Silva', 'saldo' => 10000000],
    '123.456.879-11' => ['titular' => 'Marta Miranda', 'saldo'=> 100050000],
    '123.456.879-12' => ['titular' => 'Neymar Junior', 'saldo' => 18163254000],
    '123.456.879-13' => ['titular' => 'Luana Piovani', 'saldo' => 10000000],];

//->para adcionar uma nova conta ao banco.
$contascorrentes['123.456.789-13'] = ['titular' => 'Claudia Leite', 'saldo' => 2000];

//>para adcionar uma conta ao banco.
unset($contascorrentes['123.456.879-12']);

maiuscula($contascorrentes['123.456.879-10']);

//->para exibir todas as informações da conta.
foreach ($contascorrentes as $cpf => $conta){
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}

//>ultilizando a função sacar.
$contascorrentes['123.45.6879-10'] = sacar(
    $contascorrentes['123.456.879-10'], 200);

//>ultilizando a função depositar.
$contascorrentes['123.456.879-13'] = depositar(
    $contascorrentes['123.456.879-13'],200);




