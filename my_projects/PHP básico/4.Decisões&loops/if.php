<?php
//da msm forma que em C temos os seguintes operadores comparativos:
// == <= >= !=(diferente) ||(ou) &&(and).
$idade = 16;

echo " você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar.";
}
else {
    echo "você só tem $idade anos. Você não pode entrar";
}
echo "Adeus!";
