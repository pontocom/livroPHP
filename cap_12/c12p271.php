<?php
if (( !isset( $_SERVER['PHP_AUTH_USER'] )) || (!isset($_SERVER['PHP_AUTH_PW'])) || ( $_SERVER['PHP_AUTH_USER']!= 'marques') || ( $_SERVER['PHP_AUTH_PW'] != 'aeiou' )) {
    header( 'WWW-Authenticate: Basic realm="Autentica��o com PHP"' );
    header( 'HTTP/1.0 401 Unauthorized' );
    echo 'Necessita de autoriza��o.';
    exit;
} else {
    echo 'Autentica��o com �xito';
}
?>

