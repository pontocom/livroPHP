<?php
if ((!isset($_SERVER['PHP_AUTH_USER'])) || (!isset($_SERVER['PHP_AUTH_PW']))) {
    header('WWW-Authenticate: Basic Realm="Autentica��o com PHP"');
    header("HTTP/1.0 401 Unauthorized");
    	//se n�o funcionar substituir HTTP/1.0 por status:  //
    echo 'Necessita de Autoriza��o.';
    exit;

} else {
    echo "O login foi efectuado por ->". $_SERVER['PHP_AUTH_USER'] ."(username).<BR>";
    echo "A sua password � -> ". $_SERVER['PHP_AUTH_PW'] . "<BR>";
}
?>

