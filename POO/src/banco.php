<?php

require_once 'C:\MyGith\PHP\POO\src\Conta.php';
require_once 'C:\MyGith\PHP\POO\src\Titular.php';
require_once 'C:\MyGith\PHP\POO\src\CPF.php';

// Sem construtor
// $primeiraConta = new Conta();
// $primeiraConta->depositar(500);
// $primeiraConta->sacar(300);

// // private evita
// //$primeiraConta -> saldo -=1500;

// echo $primeiraConta->defineCpf('114.052.636.79') . PHP_EOL;
// echo $primeiraConta->recuperarCpfTitular();
// echo $primeiraConta->defineNomeItular('Vine') . PHP_EOL;
// echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
// echo $primeiraConta->recuperaSaldo();


// usando construtor
$primeiraConta = new Conta('123.456.789-10', 'Vinicius Dias');
// $primeiraConta->depositar(500);
// $primeiraConta->sacar(300);
// echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
// echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
// echo $primeiraConta->recuperaSaldo();

$segundaConta = new Conta('698.549.548-10', 'Patricia');
var_dump($segundaConta);

new Conta('123', 'Abcdefg');

//echo Conta::$numeroDeContas;
echo Conta::recuperaNumeroDeContas();

$vinicius = new Titular('123.456.789.10', 'ViniciusDias');

var_dump($vinicius);

$outra = new Conta(new Titular(new CPF('123'), 'Abcdefg'));
