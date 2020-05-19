<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contacorrente = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Cidade', 'bairro', 'rua', 'numero')
    )
);


try {
    $contacorrente->deposita(-100);
} catch (InvalidArgumentException $execpitiom) {
    echo "Valor a depostitar precisa, ser postivo, seu Hacker FDP ";
}
