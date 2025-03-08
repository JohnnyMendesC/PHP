<?php

//Exibir todos números ímpares de 0 a 100.
$tab = 0;

echo "Números ímpares" . PHP_EOL;

for ($numeros = 0; $numeros <= 100; $numeros++) {
    if ($numeros%2 != 0){
        echo "$numeros |\t";
        $tab++;
        if ($tab == 5) {
            echo "\n";
            $tab = 0;
        }
    }
}

