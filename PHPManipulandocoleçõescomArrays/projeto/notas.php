<?php

$notas = [9, 3, 10, 5, 10, 8];

echo "<p>A nota de pertugues é:  $notas[0]</p>";
echo "<p>A nota de matematica é: $notas[1] </p>";
echo "<p>A nota de Geografia é:  $notas[2]</p>";
echo "<p>A nota de historia é:   $notas[3]</p>";
echo "<p>A nota de Quimica é:    $notas[4]</p>";
echo "<p>A nota de Artes é:      $notas[5]</p>";


$quantidadeNotas = sizeof($notas); //quantidades do item dentro e um array

$soma = 0;
for ($i = 0; $i < $quantidadeNotas; $i++) {
    $soma += $notas[$i];
}

$media = $soma / $quantidadeNotas;

echo  "<p> A media das notas é : $media</p>";
