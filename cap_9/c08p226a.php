<?php /*Script odbc_teste.php*/ ?>
<?php
echo "<center>Visualiza��o de base de dados via ODBC<P>";
$liga��o=odbc_connect("testeDB-mysql", "root", "") or die ("Imposs�vel ligar via ODBC");
$sql="select * from teste";
//$resultado= odbc_exec ($liga��o,$sql) or die ("Imposs�vel executar a query");
$resultado=odbc_do($liga��o,$sql);
//$rep=odbc_fetch_row($resultado);
odbc_result_all ($resultado, "border=3");
odbc_free_result($resultado);
odbc_close($liga��o);
?>

