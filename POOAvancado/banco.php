<?php
// require_once 'src/Modelo/Conta/Conta.php';
// require_once 'src/Modelo/Endereco.php';
// require_once 'src/Modelo/Pessoa.php';
// require_once 'src/Modelo/Conta/Titular.php';
// require_once 'src/Modelo/CPF.php';

require_once 'AutoLoad.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Petropolis', 'um bairro', 'minharua', '71b');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outoendereco = new Endereco('A', 'B', 'C', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outoendereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
