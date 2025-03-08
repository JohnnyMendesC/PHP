<?php

$idade = 28;
echo "\n Aspas simples '' não reconhece variavel\n";
echo 'Idade = $idade';
echo "\n Aspas duplas reconhece variaveis\n";
echo "Idade = $idade";
echo "\n O ponto . concatena variaveis\n";
echo 'Idade = ' . $idade . ' anos';

echo "\n\n \t".'Como o as aspas simples entendem que tudo dentro delas é String, não tem como adicionar
caracteres especiais ou até mesmo quebra de linha \n (que vem de \ new line)'.", mas concatenando \r
com aspas duplas da. \n \r\t" . '
Inclusive é possível utilizar o comando PHP_EOL, ou End Of Line'.PHP_EOL . "
Ele é considerado o método preferível, já que é compatível com outros sistemas operacionais PHP_EOL ";