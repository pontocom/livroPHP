<?php /*Script login.inc*/ ?>
<?php
if ($Entrar) {
$liga��o=mysql_connect("localhost","","") or die ("Imposs�vel ligar � base de dados");
$db=mysql_select_db("testeDB") or die ("Imposs�vel seleccionar a base de dados.");
$sql = "SELECT * FROM users WHERE nome='$nome' and password='$login'";
$result = mysql_query($sql);
$num_reg=mysql_num_rows($result);
  if ($num_reg==1) {
         while ($registo=mysql_fetch_array($result)) {
         $nivel=$registo["nivel"];
         }
     session_register('nivel_s');
     $nivel_s=$nivel;
     echo ("<a href=\"login1.php\"> LOGIN </a>");
  } else {
     $nivel_s="";
    print "Aten��o --- o nome e/ou password est�o incorrectos      <p>";
  echo ("<a href=\"login1.php\"> LOGIN </a>");
  }
} else {
echo ("<a href=\"login1.php\"> LOGIN </a>");
}
?>
