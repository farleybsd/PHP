<?php

require "Calculadora.php";

$notas = [9, 5, 10, 8];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media > 0) {
    echo "<p>A media é: $media</p>";
} else {
    echo "Não foi possivel calcular a média";
}
