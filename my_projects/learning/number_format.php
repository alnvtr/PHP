<?php
// o comando number_format() serve para para formatar o numero de casas decimais que deve aparecer.
// alem de mudar o separador decimal e milhar.
$numero = 4.54352;
echo $numero . PHP_EOL;
$numero1 = number_format($numero,2,',','.',);
echo $numero1 . PHP_EOL;
