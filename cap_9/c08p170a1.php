<html>
<body>
<?php
$liga��o = mysql_connect("localhost", "root", "") or die ("problemas na liga��o ao MySQL");
mysql_select_db("testeDB", $liga��o);
$sql = "select nome, telefone from teste";
$resultado = mysql_query($sql, $liga��o);
while ($registo = mysql_fetch_row($resultado)){
    print ("$registo[0] --- $registo[1] <br>");
    }
mysql_close();
?>
</body>
</html>

