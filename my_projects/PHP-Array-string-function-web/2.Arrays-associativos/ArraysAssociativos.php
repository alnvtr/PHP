<?php
$cadastro1 = ['nome' => 'Alan Vitor', 'idade' => '23'];
$cadastro2 = ['nome' => 'Renato Cariani', 'idade' => '23'];
$cadastro3 = ['nome' => 'Luiz Inacio', 'idade' => '23'];
$cadastro4 = ['nome' => 'Vinicius Junior', 'idade' => '23'];
$cadastros = [$cadastro1, $cadastro2, $cadastro3, $cadastro4];

foreach ($cadastros as $cadastro){
    echo $cadastro . PHP_EOL;
}