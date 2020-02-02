<?php 
$conta1 = [
    'titular' => 'Gabriel',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 3000
];

$conta3 = [
    'titular' => 'Olegario',
    'saldo' => 2000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}

?>