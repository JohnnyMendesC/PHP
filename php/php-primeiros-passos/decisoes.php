<?php

echo "\nCliente 1\n";
$idade = 28;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar.';
} else {
    echo "Você tem $idade anos. Não pode entrar.";
}

echo "\nCliente 2\n";
$idade = 18;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade == 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar.';
} else {
    echo "Você tem $idade anos. \nNão pode entrar.";
}


echo "\nCliente 3\n";
$idade = 16;

echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade == 18 || $idade > 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entrar.';
} else {
    echo "Você tem $idade anos. Não pode entrar.";
}


echo "\n\nCliente 4\n";
$idade = 17;
$nome = "Java";

echo "Você só pode entrar se tiver mais do que 18 anos e seu nome tem que ser PHP" . PHP_EOL;

if ($idade >= 18 and $nome == "PHP") {
    echo "Você tem $idade anos. E se chama PHP" . PHP_EOL;
    echo 'Pode entrar.';
} else if ($idade >= 18 and $nome != "PHP") {
    echo "Você tem $idade anos. Mas não se chama PHP" . PHP_EOL;
    echo 'Não pode entrar.';
} else if ($idade < 18 and $nome == "PHP") {
    echo "Voce se chama PHP. Mas você tem $idade anos." . PHP_EOL;
    echo 'Não pode entrar.';
} else {
    echo "Você tem $idade anos e não se chama PHP. Não pode entrar.";
}

echo "\n\nCliente 5\n";
$idade = 18;
$nome = "Java";

echo "Você só pode entrar se tiver mais do que 18 anos e seu nome tem que ser PHP" . PHP_EOL;

if ($idade >= 18 and $nome == "PHP") {
    echo "Você tem $idade anos. E se chama PHP" . PHP_EOL;
    echo 'Pode entrar.';
} else if ($idade >= 18 and $nome != "PHP") {
    echo "Você tem $idade anos. Mas não se chama PHP" . PHP_EOL;
    echo 'Não pode entrar.';
} else if ($idade < 18 and $nome == "PHP") {
    echo "Voce se chama PHP. Mas você tem $idade anos." . PHP_EOL;
    echo 'Não pode entrar.';
} else {
    echo "Você tem $idade anos e não se chama PHP. Não pode entrar.";
}

echo "\n\nCliente 6\n";
$idade = 17;
$nome = "PHP";

echo "Você só pode entrar se tiver mais do que 18 anos e seu nome tem que ser PHP" . PHP_EOL;

if ($idade >= 18 and $nome == "PHP") {
    echo "Você tem $idade anos. E se chama PHP" . PHP_EOL;
    echo 'Pode entrar.';
} else if ($idade >= 18 and $nome != "PHP") {
    echo "Você tem $idade anos. Mas não se chama PHP" . PHP_EOL;
    echo 'Não pode entrar.';
} else if ($idade < 18 and $nome == "PHP") {
    echo "Voce se chama PHP. Mas você tem $idade anos." . PHP_EOL;
    echo 'Não pode entrar.';
} else {
    echo "Você tem $idade anos e não se chama PHP. Não pode entrar.";
}

echo "\n\nCliente 7\n";
$idade = 28;
$nome = "PHP";

echo "Você só pode entrar se tiver mais do que 18 anos e seu nome tem que ser PHP" . PHP_EOL;

if ($idade >= 18 and $nome == "PHP") {
    echo "Você tem $idade anos. E se chama PHP" . PHP_EOL;
    echo 'Pode entrar.';
} else if ($idade >= 18 and $nome != "PHP") {
    echo "Você tem $idade anos. Mas não se chama PHP" . PHP_EOL;
    echo 'Não pode entrar.';
} else if ($idade < 18 && $nome == "PHP") {
    echo "Voce se chama PHP. Mas você tem $idade anos." . PHP_EOL;
    echo 'Não pode entrar.';
} else {
    echo "Você tem $idade anos e não se chama PHP. Não pode entrar.";
}

echo "\n\nCliente 8\n";
$idade = 18;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais do que 18 anos ou " . PHP_EOL;
echo "a partir de 16 e estiver acompanhado " . PHP_EOL;

if ($idade >= 18) {
    echo "Voce tem $idade anos. Pode entrar sozinho(a).";
} else {
    if ($idade >= 16 && $numeroDePessoas > 1) {
        echo "Voce tem $idade anos, porém está acompanhado(a), " . PHP_EOL;
        echo "então pode entrar.";
    } else {
        echo "Voce só tem $idade anos e não está acompanhado(a). Você não pode entrar.";
    }
}