<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAuthenticar($senha)) {
            echo "Ok.Usuário Logado no Sistema";
        } else {
            echo "Ops.Senha incorreta";
        }
    }
}
