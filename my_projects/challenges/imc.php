<?php
$peso = 80;
$altura = 1.70;
$imc = $peso / $altura ** 2;
$imc1 = number_format($imc, 2, ',');
echo " o seu IMC(indice  de massa corporal) é de:" . PHP_EOL . "$imc1%.Voce esta com o imc ";
if($imc1 < 18.5) {
    echo("abaixo ");
} elseif ($imc1 < 25){
    echo "dentro ";
} else {
    echo "acima ";
}
echo "do recomendado.";


