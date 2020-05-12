<?php

use Alura\Banco\Modelo\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'AutoLoad.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Vinicius Dias',
        new Endereco('Petropolis', 'Bairro Teste', 'Rua lá', '37')
    )
);

$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();
