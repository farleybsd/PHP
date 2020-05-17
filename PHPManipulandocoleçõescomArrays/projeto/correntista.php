<?php


require "ArrayUtils.php";

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    "Luis",
    "luisa",
    "12"
];
echo "<pre>";
var_dump($correntistas_e_compras);


//chamando metodo estatico
ArrayUtils::remover("João", $correntistas_e_compras);



var_dump($correntistas_e_compras);
echo "</pre>";
