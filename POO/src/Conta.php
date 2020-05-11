<?php

class Conta
{

    private float $saldo;
    private  static int $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        echo "Criando Nova Conta" . PHP_EOL;
        $this->cpfTitular = $cpfTitular;
        //$this->validaNomeTitular($nomeTitular);
        $this->saldo = 0;
        self::$numeroDeContas++;
        //self classe
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas++;
    }

    //somente a conta precisa conhecer nao o objeto que o chamar



    public function sacar(float $valorasacar)
    {
        if ($valorasacar > $this->saldo) {
            echo 'Saldo Indisponivel';
        } else {
            $this->saldo -= $valorasacar;
        }
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor Presiza Ser Positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valoraTransferir, Conta $contaDestino): void
    {
        if ($valoraTransferir > $this->saldo) {
            echo 'Salo Indisponivel';
            return;
        }

        $this->sacar($valoraTransferir);
        $contaDestino->depositar($valoraTransferir);
    }

    public function recuperaSaldo(): float
    {
        return  $this->saldo;
    }


    public function recuperarCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public  function defineCpf(string $cpf): void
    {
        $this->cpfTitular = $cpf;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public  function defineNomeItular(string $cpf): void
    {
        $this->nomeTitular = $cpf;
    }
}
