<?php 

    $contasCorrentes = [
       12345678910 =>  [
        'titular' => 'Gabriel',
        'saldo' => 1000
       ], 
       12345678911 => [
        'titular' => 'Maria',
        'saldo' => 3000
       ], 
       12345678912 => [
        'titular' => 'Olegario',
        'saldo' => 2000
        ]
    ];

    foreach($contasCorrentes as $cpf => $conta){
        echo $conta['titular'] . PHP_EOL;
    }
?>