<?php
function data_actual_portugues() {
	/* escreve a data em formato dia_da_semana, dia_do_m�s de m�s, ano */ 
	$d2p = getdate(time());

	switch($d2p["weekday"]) {
		case "Monday": $dds = "2� Feira"; break;
		case "Tuesday": $dds = "3� Feira"; break;
		case "Wednesday": $dds = "4� Feira"; break;
		case "Thursday": $dds = "5� Feira"; break;
		case "Friday": $dds = "6� Feira"; break;
		case "Saturday": $dds = "S�bado"; break;
		case "Sunday": $dds = "Domingo"; break;
	}

	switch($d2p["month"]) {
		case "January": $mes = "Janeiro"; break;
		case "February": $mes = "Fevereiro"; break;
		case "March": $mes = "Mar�o"; break;
		case "April": $mes = "Abril"; break;
		case "May": $mes = "Maio"; break;
		case "June": $mes = "Junho"; break;
		case "July": $mes = "Julho"; break;
		case "August": $mes = "Agosto"; break;
		case "September": $mes = "Setembro"; break;
		case "October": $mes = "Outubro"; break;
		case "November": $mes = "Novembro"; break;
		case "December": $mes = "Dezembro"; break;
	}
	
	$data = sprintf("%s, %d de %s, %d", $dds, $d2p["mday"], $mes, $d2p["year"]);
	return $data;
}

printf("<h2>Hoje � %s.</h2>", data_actual_portugues());
?>
