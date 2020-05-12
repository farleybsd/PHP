<?php

require_once 'AutoLoad.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\Dessenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Funcionario;
use Alura\Banco\Modelo\Funcionario\Gerente;

// $umFuncionario = new Funcionario(
//     'Vinicius Dias',
//     new CPF('123.456.789-10'),
//     'Desenvolvedor',
//     1000
// );

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('987.654.321-10'),

    3000
);

$umDiretor = new Diretor(
    'AnaLisboa',
    new CPF('123.678.458-91'),

    5000
);

$umDev = new Dessenvolvedor(
    'FarleyRfino',
    new CPF('114.052.636-79'),

    1000
);

$umDev->sobreNivel();

$umEditor = new EditorVideo(
    'Paulo',
    new CPF('123.567.888-91'),
    1500
);

$controlador = new ControladorDeBonificacoes();
// $controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umDev);
$controlador->adicionaBonificacaoDe($umEditor);
echo $controlador->recuperaTotal();
