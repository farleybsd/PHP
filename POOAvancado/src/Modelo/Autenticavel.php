<?php

namespace Alura\Banco\Modelo;

interface Autenticavel
{
    public  function podeAuthenticar(string $senha): bool;
}
