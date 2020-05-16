<?php

$Saldo = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach ($Saldo as $item) {
    echo "<p> O saldo é :$item</p>";
};

// foratacao
echo "<pre>";
// Sem Ordenacao

var_dump($Saldo);

// Com Ordenacao
sort($Saldo);
var_dump($Saldo);
// fim formatacao
echo "</pre>";

echo "O menor Saldo é: $Saldo[0]";
