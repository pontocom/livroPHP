<?php /*Script php_teste1.php*/ ?>
<?php
echo "<center>Visualiza��o de base de dados via ODBC<P>";
$liga��o=odbc_connect("testeDB", "", "") or die ("Imposs�vel ligar via ODBC");
$sql="select * from teste order by nome desc";
$resultado=odbc_do($liga��o,$sql);
if ($resultado) {
printf ("Registos encontrados na base de dados <p>");
printf ("<table border=\"2\" cellpadding=\"0\" cellspacing=\"0\" width=\"390\">");
printf ("<tr><td bgcolor=\"#0bb000\"> <p align=\"center\">Nome</td>");
printf ("<td bgcolor=\"#008000\"><p align=\"center\">e-mail</td></tr>");
while (odbc_fetch_row($resultado)) {
$nome = odbc_result($resultado,2);
$email = odbc_result($resultado,3);
printf ("<tr><td><p align=\"center\">$nome</td>");
printf ("<td><p align=\"center\">$email</td></tr>");
}
printf ("</table>");
} else {
printf ("n�o h� registos");
}
odbc_free_result($resultado);
odbc_close($liga��o);
?>

