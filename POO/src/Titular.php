<?php

class Titular
{
    private string  $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->validaNomeTitular($nome);
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome Precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
    public function recuperaCPF(): string
    {
        return $this->cpf;
    }

    public function recupeNome(): string
    {
        return $this->nome;
    }
}
