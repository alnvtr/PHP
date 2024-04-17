<?php
//->para criar uma sub-rotina(procedimento) de exibir mensagem com quebra de linha.
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

//->contas cadastradas no banco do amor.
$contascorrentes = [
    '123.456.879-10' => ['titular' => 'Thiago Silva', 'saldo' => 10000000],
    '123.456.879-11' => ['titular' => 'Marta Miranda', 'saldo'=> 100050000],
    '123.456.879-12' => ['titular' => 'Neymar Junior', 'saldo' => 18163254000],
    '123.456.879-13' => ['titular' => 'Luana Piovani', 'saldo' => 10000000],
    ];


//->para adcionar uma nova conta ao banco.
$contascorrentes['123.456.789-13'] = ['titular' => 'Claudia Leite', 'saldo' => 2000];


//->para exibir todas as informações da conta.
foreach ($contascorrentes as $cpf => $conta) {
    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
}

//>criando a função depositar para depositar um valor na conta.
function depositar(array $conta, float$valor_depositar) : array
{
    if ($valor_depositar > 0){
        $conta['saldo'] += $valor_depositar;
    }else{
        exibirmensagem(
            "Depósitos precisam ser posítivos"
        );
    }
    return $conta;
}


//>criando a função sacar para sacar um valor da conta.
function sacar(array $conta, float $valor_sacar): array
{
    if($valor_sacar > $conta['saldo']){
        exibirmensagem(
            "Você não tem saldo suficiente."
        );
    }else{
        $conta['saldo'] -= $valor_sacar;
    }
    return $conta;
}


//>ultilizando a função sacar.
$contascorrentes['123.45.6879-10'] = sacar(
    $contascorrentes['123.456.879-10'], 200
);


//>ultilizando a função depositar.
$contascorrentes['123.456.879-13'] = depositar(
    $contascorrentes['123.456.879-13'],200
);
//dentro de uma string não é necessário colocar ''.


