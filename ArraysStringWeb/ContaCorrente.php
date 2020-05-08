<?php
// array associativo parece dicionario
$Conta1 = [
    'titular' => 'Vinicius',
     'saldo' => 1000
    ];
//$Conta1['titular'];

$Conta2 = [
    'titular' => 'Farley',
    'saldo' => 3000
];

$Conta3 = [
    'titular' => 'Maria',
    'saldo' => 5000
];

$ContaCorrente =[$Conta1,$Conta2,$Conta3];

//echo $Conta1['titular'] . PHP_EOL ;

for ($i=0; $i <= count($ContaCorrente) ; $i++) { 
    
    echo $ContaCorrente[$i]['titular'] . PHP_EOL;
}