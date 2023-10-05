<?php

$idade = 17;

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar" . PHP_EOL;
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}
   