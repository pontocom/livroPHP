<?php
include('mailval.php');

if (!mailval("goncaloandre@hotmail.com",3))
	print ("Endere�o de e-mail V�lido!");
else
	print ("Endere�o de e-mail Inv�lido!");
?>