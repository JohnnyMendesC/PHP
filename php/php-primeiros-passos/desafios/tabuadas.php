<?php

$multiplicando = 1;
$multiplicador = 1;
$produto = 0;

while ($multiplicador <= 10) {
    echo "Tabuada de $multiplicador:".PHP_EOL;
    for ($multiplicando = 1; $multiplicando <= 10; $multiplicando++){
        $produto = $multiplicando*$multiplicador;
        echo "$multiplicando x $multiplicador = $produto".PHP_EOL;
    }
    $multiplicador++;
    echo PHP_EOL;
}