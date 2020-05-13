<?php

use Alura\Banco\Modelo\Endereco;

require_once 'AutoLoad.php';

$umendereco = new Endereco(
    'Petrópoles',
    'Bairro Qualquer',
    'minha rua ',
    '71b'
);

$outroendereco = new Endereco(
    'Rio',
    'Centro',
    'Uma rua aí',
    '50'
);

echo $umendereco . PHP_EOL;
echo $outroendereco . PHP_EOL;

echo $umendereco->rua . PHP_EOL;
echo $umendereco->bairro . PHP_EOL;
exit();
