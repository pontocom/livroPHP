<?php
    function read() {
        $fich=fopen("php://stdin", "r");
        $input=fgets($fich, 80);
        fclose($fich);
        return $input;
    }
 
    print("Qual � o teu primeiro nome? ");
    $nome = read();
    print("ol�, $nome  ... tu �s fixe!\n");
?>