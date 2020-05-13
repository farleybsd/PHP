<?php

namespace Alura\Banco\Modelo;
//trait voce injenta um metodo em qualquer classe copia e cola o codigo
trait AcessoPropiedades
{
    public function __get($nomeAtributo)
    {

        $metodo = 'recupera' . ucfirst($nomeAtributo);;
        echo $metodo;
        return $this->$metodo();
    }
}
