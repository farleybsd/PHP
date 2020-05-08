<?php

echo 'Funcoes chegando';

function sacar(array $Conta, float $valorASacar) : array

{
   if ($valorASacar > $conta['saldo'])
    {
       exibeMensagem('Você não pode sacar este valor');
   } else
       $conta['saldo'] -= $valorASacar;

   return $Conta;
}

function exibeMensagem(string $mensagem){
   echo $mensagem . PHP_EOL;
}

function depositar(array $conta,float $valoraDepositar):array
{

   if($valoraDepositar > 0)
   {
   $conta['saldo'] +=$valoraDepositar;
   return $conta;
   }
   else {
       exibeMensagem('Depositos presisa ser positivo');
   }
}

//variavel por refencia manda o valor original e tem que adcionar &
function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);

}