<?php

declare(strict_types=1); // nao fazer cast de conversao automatica
namespace Alura;

spl_autoload_register();

$correntistas_e_compras = [
    "Giovanni",
    12,
    "Maria",
    25,
    "Luis",
    "Luísa",
    "12"
];

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover("12", $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";
