<?php

declare(strict_types=1); // nao fazer cast de conversao automatica
namespace Alura;

class ArrayUtils
{
    public static function remover(string $elemento, array &$array) //&array pot referencia 
    {
        // dier(); para execução
        $posicao = array_search($elemento, $array, true);
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "Não foi encontrado no array";
        }
    }


    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $correntistacomSaldoMAior = array();
        foreach ($array as $chave => $valor) {
            if ($valor > $saldo) {
                $correntistacomSaldoMAior[] = $chave;
            }
        }

        return $correntistacomSaldoMAior;
    }
}
