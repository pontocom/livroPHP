<?
include('nusoap.php');

$NAMESPACE = "http://www.iscte.pt/meteo";

$meteo_server = new soap_server();

$meteo_server->debug_flag=false;
$meteo_server->configureWSDL('meteo', $NAMESPACE);
$meto_server->wsdl->schemaTargetNamespace = $NAMESPACE;


$meteo_server->register('temperatura',
						array('cidade'=>'xsd:string'),
						array('result_message'=>'xsd:string',
						'max' => 'xsd:string',
						'min' => 'xsd:string'),
						$NAMESPACE);


$meteo_server->register('previsao',
						array('cidade'=>'xsd:string'),
						array('result_message'=>'xsd:string',
						'previsao' => 'xsd:string'),
						$NAMESPACE);

function temperatura($cidade) {
	// Efectua a ligaчуo ao servidor de BD
	$ligacao = mysql_connect("localhost", "root", "") or die("Nуo consegui estabelecer a ligaчуo ao servidor de BD!!!");
	
	// Selecciona a BD do Servidor
	if(!mysql_select_db("meteo", $ligacao))
		echo "Nуo consegui seleccionar a BD.";
		
		
	/**
	Colocar queries
	*/
	// Seleccionar da BD
	$sql = "SELECT * FROM previsao WHERE nome='".$cidade."'";
	
	$result = mysql_query($sql, $ligacao);

	if(!$result) {
		return array("result_message"=>"ERRO");
	}
	
	if(mysql_fetch_row($result)) {
		$max = mysql_result($result, $n, "max");
		$min = mysql_result($result, $n, "min");
	} else { 
		return array("result_message"=>"ERRO");
	}
		
	// Termina a ligaчуo ao Servidor de BD
	mysql_close($ligacao);
	
	return array("result_message"=>"OK",
				"max"=>$max,
				"min"=>$min);

}

function previsao($cidade) {
}

//print_r(temperatura("AVEIRO"));

$meteo_server->service($HTTP_RAW_POST_DATA);
exit();


?>