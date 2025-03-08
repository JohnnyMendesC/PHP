<?php

// Enquanto

echo "Contador While é melhor pra quando o limite não é definido" . PHP_EOL;
$contadorW = 1;
while ($contadorW <= 15) {
    echo "W $contadorW" . PHP_EOL;
    $contadorW = $contadorW + 1;
}


// Para
echo "Contador For é pra quando o limite é definido" . PHP_EOL;
for ($contadorF = 1; $contadorF <=15; $contadorF++) {
    echo "F $contadorF" . PHP_EOL;
}

echo "Contador For break" . PHP_EOL;
for ($contadorF = 1; $contadorF <=15; $contadorF++) {
    if ($contadorF >= 13){
        break;
    } else {
        echo "F $contadorF" . PHP_EOL;
    }
}

echo "Contador For continue" . PHP_EOL;
for ($contadorF = 1; $contadorF <=15; $contadorF++) {
    if ($contadorF <= 13){
        continue;
    } else {
        echo "F $contadorF" . PHP_EOL;
    }
}

echo "Contador For com in array ausentes" . PHP_EOL;
$ausentes = [1, 5, 15];
for ($contadorF = 1; $contadorF <=15; $contadorF++) {
    if (!in_array ($contadorF, $ausentes)){
    echo "F $contadorF" . PHP_EOL;
    }
}
