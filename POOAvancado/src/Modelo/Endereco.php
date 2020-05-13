<?php

namespace Alura\Banco\Modelo;

// final nao pode extender a class
final class Endereco
{
    use AcessoPropiedades; // Trait

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

    public function __toString(): string
    {
        return "{$this->rua},{$this->numero},{$this->bairro},{$this->cidade}";
    }
}
