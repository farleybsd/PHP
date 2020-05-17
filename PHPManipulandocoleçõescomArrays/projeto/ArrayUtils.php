<?php

class ArrayUtils
{
    public static function remover(string $elemento, array $array)
    {
        $posicao = array_search($elemento, $array);
        echo "<pre>";
        var_dump($posicao);
        echo "</pre>";

        unset($array[$posicao]); // remover itens de um array;
    }
}
