<?php

$nomes = 'Giovanni,João,Maria,Pedro';

$array_nomes = explode(",", $nomes); // transforma em array

foreach ($array_nomes as $item) {

    echo "<p>Olá, $item</p>";
}

$nomesJuntos = implode(",", $array_nomes); // Junta em string tipo join c#
echo "<pre>";
//var_dump($array_nomes);
echo "</pre>";

echo $nomesJuntos;
