<?php
//funções retornam valores.
function soma($x, $y){
    return $x + $y;
}
$resultado = soma(5, 4);
echo $resultado;

/*MODELO PADRÃO
function nomedafuncao(tipo $parametro1, teipo $parametro2)
{
return parametro1 + parametro2;
}