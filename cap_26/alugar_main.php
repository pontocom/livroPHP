<?php
if($_REQUEST['astatus']==0 || isset($_REQUEST['astatus'])==false) {
?>
<b>ALUGUER DO VE�CULO</b> 
<p>
<?php
include("BDMySQL.class.php");
include("ARVeiculo.class.php");
?>
Por favor, preencha os seguintes dados para proceder ao aluguer da viatura que escolheu.<br>
<br>
Viatura: <b><?php echo $_REQUEST['matricula']; ?></b>
<br>
<form method=post action="index.php?pagina=alugar&astatus=1">
<input type=hidden name="matricula" value="<?php echo $_REQUEST['matricula']; ?>">
Data de Reserva:<br>
  <select name="drdia">
 <?php
 for($n=1;$n<=31;$n++) echo "<option value=\"$n\">$n</option>";
 ?>
  </select>
  - 
  <select name="drmes">
 <?php
 for($n=1;$n<=12;$n++) echo "<option value=\"$n\">$n</option>";
 ?>
  </select>
  - 
  <select name="drano">
 <?php
 for($n=2006;$n<=2010;$n++) echo "<option value=\"$n\">$n</option>";
 ?>
  </select>
  <br>
Data de Entrega:<br>
  <select name="dedia">
 <?php
 for($n=1;$n<=31;$n++) echo "<option value=\"$n\">$n</option>";
 ?>
  </select>
  - 
  <select name="demes">
 <?php
 for($n=1;$n<=12;$n++) echo "<option value=\"$n\">$n</option>";
 ?>
  </select>
  - 
  <select name="deano">
 <?php
 for($n=2006;$n<=2010;$n++) echo "<option value=\"$n\">$n</option>";
 ?>
  </select>
  <br><br><br>
Dados de Reserva:<br>
Nome do Cart�o de Cr�dito:<br>
  <input type=text size="20" name="nome_cc">
  <br>
Numero do Cart�o de Cr�dito:<br>
  <input type=text name="n1_cc" size="4" maxlength="4">
  -
  <input type=text name="n2_cc" size="4" maxlength="4">
  -
  <input type=text name="n3_cc" size="4" maxlength="4">
  -
  <input type=text name="n4_cc" size="4" maxlength="4">
  <br>
Data de Validade: <br>
  <select name="dvmes_cc">
 <?php
 for($n=1;$n<=12;$n++) echo "<option value=\"$n\">$n</option>";
 ?>
  </select>
  - 
  <select name="dvano_cc">
 <?php
 for($n=2006;$n<=2010;$n++) echo "<option value=\"$n\">$n</option>";
 ?>
  </select>
  <br>
  <br>
<input type=submit value="Confirmar o Aluguer">
</form>

</p>
<p>&nbsp;</p>
<?php
} else {
?>
<b>ALUGUER DO VE�CULO</b> 
<p>
<?php
include("BDMySQL.class.php");
include("ARUtilizador.class.php");
?>
Confirma��o dos dados utilizados para a reserva... <br><br>
<?php
if(mktime(0,0,0,$_REQUEST['drmes'], $_REQUEST['drdia'], $_REQUEST['drano']) < mktime(0,0,0,$_REQUEST['demes'], $_REQUEST['dedia'], $_REQUEST['deano']) ) {
	/* calcular o valor a cobrar */
	$dias = (mktime(0,0,0,$_REQUEST['demes'], $_REQUEST['dedia'], $_REQUEST['deano']) - mktime(0,0,0,$_REQUEST['drmes'], $_REQUEST['drdia'], $_REQUEST['drano'])) / 86400;
	$util = new ARUtilizador();
	echo "O viatura estar� alugada durante <b>$dias</b> dias e o custo total ser� de <b>".$util->calcularPreco($dias, $_REQUEST['matricula'])."</b> euros.<br><br>";
	echo "Esta quantia ser� creditada no cart�o de cr�dito <b>".$_REQUEST['n1_cc']."-".$_REQUEST['n2_cc']."-XXXX-XXXX</b>, pertencente a <b>".$_REQUEST['nome_cc']."</b> e cuja validade termina a <b>".$_REQUEST['dvmes_cc']."/".$_REQUEST['dvano_cc']."</b><br>";
	$util->efectuarAluguer($_SESSION['login_utilizador'], $_REQUEST['matricula'], $_REQUEST['drdia']."-".$_REQUEST['drmes']."-".$_REQUEST['drano'], $_REQUEST['dedia']."-".$_REQUEST['demes']."-".$_REQUEST['deano']);
	$util->endARUtilizador();
} else {
	echo "Datas escolhidas s�o inv�lidas...<br><br><a href=\"index.php?pagina=frota\">voltar</a><br>";
}
?>
</p>
<p>&nbsp;</p>
<?php
}
?>