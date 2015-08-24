<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form name="form1" method="post" action="">
  Nome da Cidade: 
    <input name="cidade" type="text" id="cidade">
    <br>
    <input type="submit" name="Submit" value="Pergunta">
</form>
</body>
</html>
<?
	if(isset($_REQUEST['cidade'])) {
		include('nusoap.php');
	
		$parameters = array("cidade"=>$_REQUEST['cidade']);
		
		$soapclient = new soapclient('http://127.0.0.1/ce/ws01_03/meteo.php');
		
		$result = $soapclient->call('temperatura', $parameters);
		
		// imprime o pedido soap e o resultado
		echo '<xmp>'.$soapclient->request.'</xmp>';
		echo "ANSWER:";
		echo '<xmp>'.$soapclient->response.'</xmp>';

		
		if($result["result_message"]=="ERRO") {
			echo "Não existe essa cidade!!!";
		} else {
			echo "Previsão: Temp. Max = ".$result["max"]."º Temp. Min = ".$result["min"]."º";
		}
	}
?>