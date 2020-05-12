<?php

namespace Alura\Banco\Modelo\Funcionario;

class Dessenvolvedor extends Funcionario
{
    public function sobreNivel()
    {
        $this->recebeAumento($this->recuperaSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 600;
    }
}
