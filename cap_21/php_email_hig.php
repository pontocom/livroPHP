<?php
/*** endere�o de email***/
$email = "marques&companhia@(alien).ex\\ample.com";
/*** higieniza��o do endere�o de e-mail ***/
echo filter_var($email, FILTER_SANITIZE_EMAIL);
?>
