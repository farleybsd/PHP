<?php

namespace Alura\Banco\Modelo;


class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaBairro(): string
    {
        return $this->cidade;
    }

    public function recuperacidade(): string
    {
        return $this->bairro;
    }

    public function recuperarua(): string
    {
        return $this->rua;
    }

    public function recuperanumero(): string
    {
        return $this->numero;
    }
}
