<b>CLASSE DE VE�CULOS</b> 
<p>
  <?php
include("BDMySQL.class.php");
include("ARClasse.class.php");

$cclasse=new ARClasse();
$cclasse->detalhesClasse($_REQUEST['classe']);
$cclasse->endARClasse();
?>
</p>
<p>&nbsp;</p>
