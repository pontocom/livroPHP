<?php
//cli_2.php
$primeiro=$argv[1];
$segundo=$argv[2];
echo "Este � o apelido $segundo  PHP/CLI depois do nome $primeiro \n";
print ("Mas o argumento inicial (nome do script) � -> $argv[0] \n");
echo "numero de argumentos transmitidos ao script -> $argc \n";
echo "estas s�o as vari�veis de ambiente \n";
print_r ($_ENV);
?>