<?php
$clientes = simplexml_load_file('clientes.xml'); 
foreach ($clientes->cliente as $cliente) { 
    print "$cliente->nome tem a conta n� 
$cliente->conta_n\n"; 
} 
?>
