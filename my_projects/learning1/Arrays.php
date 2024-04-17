<?php

$idadelist = [21, 23, 19, 25, 30, 41, 18];

list($idadevinicius, $idadejoao, $idade,$idademaria) = $idadelist;
unset($idadelist[4]);
foreach($idadelist as $idade) {
    echo $idade . PHP_EOL;
}
