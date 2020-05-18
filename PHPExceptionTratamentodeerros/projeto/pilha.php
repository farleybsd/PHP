<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    // try {
    //     $arrayfixo = new SplFixedArray(2);
    //     $arrayfixo[3] = 'Valor';
    // } catch (RuntimeException $problema) {
    //     echo "Aconteceu um erro na função 1" . PHP_EOL;
    // }
    //$divisao = intdiv(5, 0);
    try {
        funcao2();
    } catch (RuntimeException  | DivisionByZeroError $problema) {
        echo "Na funcao 1 resolvi o problema na funcao Dois" . PHP_EOL;
        echo $problema->getMessage() . PHP_EOL;
        echo $problema->getLine() . PHP_EOL;
        echo $problema->getTraceAsString() . PHP_EOL;
    } catch (DivisionByZeroError $erro) {
        echo "Erro ao Dividir um número por 0" . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $arrayfixo = new SplFixedArray(2);
    $arrayfixo[3] = 'Valor';
    $divisao = intdiv(5, 0);
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    //var_dump(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
