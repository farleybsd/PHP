<?php

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasNaoPagantes = [
    'Luis',
    'Luisa',
    'Rafael'
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);
echo  "<p>Diferenca entre arrays</p>";
echo "<pre>";
var_dump($correntistasPagantes);
echo "</pre>";


$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

//juntando dois arrays
echo  "<p>juntando dois arrays</p>";
$relacionados = array_merge($correntistas, $saldos);
//adiconando um valor em uma chave;
$relacionados["Rafael"] = 5000;
echo "<pre>";
var_dump($relacionados);
echo "</pre>";


echo  "<p>Conbinando dois arrays</p>";
$conbinados = array_combine($correntistas, $saldos);
echo "<pre>";
var_dump($conbinados);
echo "</pre>";
