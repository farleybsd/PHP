<?php
class Calculadora
{
    public function calculaMedia(array $notas): ?float // ? para poder retornar null
    {
        $quantidadeNotas = sizeof($notas); //quantidades do item dentro e um array

        if ($quantidadeNotas > 0) {
            $soma = 0;
            for ($i = 0; $i < $quantidadeNotas; $i++) {
                $soma += $notas[$i];
            }

            $media = $soma / $quantidadeNotas;

            return $media;
        } else {
            return null;
        }
    }
}
