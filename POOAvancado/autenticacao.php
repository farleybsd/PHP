<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\CPF;

require_once 'AutoLoad.php';

$authenticador = new Autenticador();

$umDiretor = new Diretor(
    'João da Silva',
    new CPF('123.456.789-10'),
    10000
);

$authenticador->tentaLogin($umDiretor, '1234');
