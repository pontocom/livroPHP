<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
 <form name="form1" method="post" action="">
   Cidade: 
   <input type="text" name="cidade">
   <br>
   <input type="submit" name="Submit" value="Pergunta"> 
</form>
</body>
</html>
<?
if(isset($_REQUEST['cidade'])) {
	include('nusoap.php');
	
	$parameters = array("cidade"=>$_REQUEST['cidade']);
	
	$soapclient = new soapclient('http://127.0.0.1/ce/ws01_01/meteo.php');
	
	$result = $soapclient->call('temperatura', $parameters);
	
	if($result["result_message"]=="ERRO") {
		echo "N�o existe essa cidade!!!";
	} else {
		echo "Previs�o: Temp. Max = ".$result["max"]."� Temp. Min = ".$result["min"]."�";
	}
}
?>