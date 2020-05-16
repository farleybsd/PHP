<?php

$notaPortugues = 9;
$notaMatematica = 3;
$notaGeografia = 10;
$notaHistoria = 5;
$notaQuimica = 10;

echo "<p>A nota de pertugues é:  $notaPortugues</p>";
echo "<p>A nota de matematica é: $notaMatematica </p>";
echo "<p>A nota de Geografia é:  $notaGeografia</p>";
echo "<p>A nota de historia é:   $notaHistoria</p>";
echo "<p>A nota de Quimica é:   $notaQuimica</p>";
$media = ($notaPortugues + $notaMatematica + $notaGeografia + $notaHistoria + $notaQuimica) / 5;

echo  "<p> A media das notas é : $media</p>";
