<?php

namespace Alura\Banco\Modelo\Conta;

// classe abstrata ainda nao esta completa ela e um modelo para as classes filhas a completará
//Não pode ser instanciada, pois ainda não está completa (não é concreta)
abstract class Conta
{
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    //garantir que todas as classes filhas terao que implementar mais com suas regras diferentes em casa classe filha
    abstract protected function percentualTarifa(): float;


    public function saca(float $valorASacar): void
    {

        $tarifaSaque = $valorASacar * $this->percentualTarifa();


        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }



    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
