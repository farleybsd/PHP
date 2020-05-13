<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
        if ($diretor->podeAuthenticar($senha)) {
            echo "Ok.Usuário Logado no Sistema";
        } else {
            echo "Ops.Senha incorreta";
        }
    }
}
