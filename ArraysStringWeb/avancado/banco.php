<?php

require_once 'funcoes.php';


$contasCorrentes =[
    '123.456.788-10' =>  [
     'titular' => 'Vinicius',
      'saldo' => 300
    ],
    '234.567.890-00' => [
     'titular' => 'Farley',
     'saldo' => 3000
 ],
    '345.678.902-22'=> [
     'titular' => 'Maria',
     'saldo' => 5000
    ],
 ];
 
 $contasCorrentes['494.347.996-00'] = [
     'titular' => 'claudia',
     'saldo' => 2000
 ];
 
 $contasCorrentes['114.052.636-79'] = [
     'titular' => 'claudia2',
     'saldo' => 300
 ];
//  echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta) {
//     //list('titular'=> $titular, 'saldo' => $saldo) = $conta;
//    //[ 'titular'=> $titular, 'saldo' => $saldo ]= $conta;
//     exibeConta($conta);
// }
// echo "</ul>";


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>



