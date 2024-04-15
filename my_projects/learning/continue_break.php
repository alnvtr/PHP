<?php
//break ou continue seve para pular uma linha do codigo
for ($contador = 1; $contador <=15; $contador++){
    if($contador == 13) {
        break;
    }else {
        echo "#$contador" . PHP_EOL;
    }
}