<html>
<body>
<?php
$liga��o = mysql_connect("localhost", "marques", "aeiou") or die ("problemas na liga��o ao MySQL");
mysql_select_db("testeDB", $liga��o);
$sql = "select nome, telefone from teste";
$resultado = mysql_query($sql, $liga��o);
$registo1 = mysql_result($resultado, 0, "nome");
$registo2 = mysql_result($resultado, 0, "telefone");
print ("$registo1 --- $registo2 <br>");
mysql_close();
?>
</body>
</html>

