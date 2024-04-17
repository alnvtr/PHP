<?php
//->para criar uma sub-rotina(procedimento) de exibir mensagem com quebra de linha.
function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
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
//>criando uma função 'maiuscula' para deixar todos os nomes em letras maiusculas.
//>aqui devemos colocar & se não a função irá alterar uma cópia e não a original.


function maiuscula(array &$conta){
    $conta['titular'] = strtoupper($conta['titular']);
}