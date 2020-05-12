<?php

namespace Alura\Banco\Modelo\Conta;

//classe filha

class ContaPoupanca extends Conta
{
    //sobrescrevi o metodo da classe Mae
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}
