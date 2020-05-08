<?php

require_once 'funcoes.php';


$contasCorrentes =[
    '123.456.788-10' =>  [
     'titular' => 'Vinicius',
      'saldo' => 300
    ],
    '234.567.890-00' => [
     'titular' => 'Farley',
     'saldo' => 3000
 ],
    '345.678.902-22'=> [
     'titular' => 'Maria',
     'saldo' => 5000
    ],
 ];
 
 $contasCorrentes['494.347.996-00'] = [
     'titular' => 'claudia',
     'saldo' => 2000
 ];
 
 $contasCorrentes['114.052.636-79'] = [
     'titular' => 'claudia2',
     'saldo' => 300
 ];
 









//$ContaCorrente ['345.678.902-22'] ['saldo'] -= 500;
//$ContaCorrente ['123.456.788-10'] ['saldo'] -= 500;

$contasCorrentes['114.052.636-79'] = depositar(
    $contasCorrentes['114.052.636-79'] ,
    900
);

$contasCorrentes['114.052.636-79'] = sacar($contasCorrentes['114.052.636-79'],500);

unset($contasCorrentes['494.347.996-00']);

titularComLetrasMaiusculas($contasCorrentes['114.052.636-79']);

foreach ($contasCorrentes as $cpf => $conta) {
    //list('titular'=> $titular, 'saldo' => $saldo) = $conta;
   [ 'titular'=> $titular, 'saldo' => $saldo ]= $conta;
    exibeMensagem(
        //"$cpf {$conta['titular']} {$conta['saldo']}"
        "$cpf $titular $saldo"
    );
}



