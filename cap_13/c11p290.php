<?php
function numero_dias_entre($df, $mf, $af, $di, $mi, $ai)
{
	/* 86400 � o n�mero de segundos que um dia possui */
	$ndias = (mktime(0,0,0,$mf,$df,$af) - mktime(0,0,0,$mi,$di,$ai))/86400;
	
	return $ndias;
}
?>

<html><body>
<?php
printf("J� decorreram <b>%d</b> dias entre %s e %s.", numero_dias_entre($_REQUEST['df'], $_REQUEST['mf'], $_REQUEST['af'], $_REQUEST['di'], $_REQUEST['mi'], $_REQUEST['ai']), date("d-F-Y", mktime(0,0,0,$_REQUEST['mi'],$_REQUEST['di'],$_REQUEST['ai'])), date("d-F-Y", mktime(0,0,0,$_REQUEST['mf'],$_REQUEST['df'],$_REQUEST['af'])));
?>
</body></html>
