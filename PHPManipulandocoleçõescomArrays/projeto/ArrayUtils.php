<?php

declare(strict_types=1); // nao fazer cast de conversao automatica

class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        // dier(); para execução
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "Não foi encontrado no array";
        }
    }
}
