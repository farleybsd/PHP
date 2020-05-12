<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Pessoa;

// Titular e uma pessoa 
class Titular extends Pessoa
{

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        // chamando construtor da classe pessoa
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }




    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
