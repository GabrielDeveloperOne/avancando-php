<?php 

    $contasCorrentes = [
       '123.456.789-10' =>  [
        'titular' => 'Gabriel',
        'saldo' => 1000
       ], 
       '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 3000
       ], 
       '123.456.789-12' => [
        'titular' => 'Olegario',
        'saldo' => 2000
       ],
    ];

    $contasCorrentes['123.457.289-12'] = [
        'titular' => 'Daniela',
        'saldo' => 3000
    ];

    foreach($contasCorrentes as $cpf => $conta){
        echo $conta['titular'] . PHP_EOL;
    }
?>