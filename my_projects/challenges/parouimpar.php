<?php
//faça um código que imprima todos os números pares de 1 ate 100

echo "todos os números impares de 0 a 100 são:" . PHP_EOL;
for($pares = 1; $pares <= 100; $pares++){
    if($pares % 2 == 0) {
        echo  "-$pares" . PHP_EOL;
    }
}
echo "todos os números impares de 0 a 100 são:" . PHP_EOL;
for($impares = 1; $impares <= 100; $impares++){
    if($impares % 2 != 0) {
        echo "-$impares" . PHP_EOL;
    }
}

