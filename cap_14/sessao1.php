<?php
	session_start();
	$variavel_sessao="um qualquer valor aleat�rio";
	$_SESSION['variavel_sessao'] = $variavel_sessao;
?>



<?php
	session_start();
	print "O valor da vari�vel de sess�o �: ".$_SESSION['variavel_sessao'];
	print "<br>";
	print  "<br> O valor da id de sess�o � " .session_id(). "<br>";
	#print_r($_SESSION);
?>

