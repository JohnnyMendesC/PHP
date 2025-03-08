<?php

echo "PHP é uma linguagem dinamicamente tipada. Ele descobre o tipo da variavel baseado no seu valor\n\n\n";

$idade = 28;
$salarioInt = 1000;
$salarioDouble = 1000.888;

echo "$ idade = 28;\nTipo = ";
echo gettype($idade);

echo "\n\n$ salarioInt = 1000; \n$ salarioDouble = 1000.30;";

echo "\n\nSalario Int = ";
echo $salarioInt;
echo "\necho gettype = ";
echo gettype($salarioInt);


echo "\nSalario Double = ";
echo $salarioDouble;
echo "\necho gettype = ";
echo gettype($salarioDouble);


echo "\n\nDivisão 10 / 3:\n";
$divisao = 10 / 3;
echo $divisao;
echo gettype($divisao);

echo "\n\nDivisão 10 / 5:\n";
$divisao = 10 / 5;
echo $divisao;
echo gettype($divisao);


echo "\nString";
$texto = "Ola mundo";

echo "\nBoolean";
$verdadeiro = true;
$falso = false;
