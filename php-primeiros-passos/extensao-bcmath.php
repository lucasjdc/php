<?php

if (!extension_loaded('bcmath')) {
    die('A extensão bcmath não está habilitada.');
}

$num1 = '12345678901234567890.1234567890';
$num2 = '98765432109876543210.9876543210';

$resultado = bcadd($num1, $num2, 10); // O terceiro argumento define a precisão
echo $resultado;


