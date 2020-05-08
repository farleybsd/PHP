<?php

$ContaCorrente =[
   '123.456.788-10' =>  [
    'titular' => 'Vinicius',
     'saldo' => 1000
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

$ContaCorrente['494.347.996-00'] = [
    'titular' => 'claudia',
    'saldo' => 2000
];

$ContaCorrente['114.052.636-79'] = [
    'titular' => 'claudia2',
    'saldo' => 2000
];

foreach ($ContaCorrente as $CPF=> $conta) {
    
    echo $CPF . " " . $conta['titular'] . PHP_EOL;
    //echo $conta['titular'];
    
}