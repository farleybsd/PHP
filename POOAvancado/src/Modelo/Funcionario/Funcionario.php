<?php
//Funcionario e uma pessoa
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa
{


    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    abstract public function calculaBonificacao(): float;

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0) {
            echo "Aumento deve ser positvo";
            return;
        }

        $this->salario += $valorAumento;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }



    public function retornacargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }
}
