<?php
session_start();
header("Cache-control: private");

$texto=$_POST['ctextof'];
$_SESSION['cfundo'] = $_POST['cfundof'];
$_SESSION['ctexto'] = $_POST['ctextof'];
printf("Variaveis de sess�o foram actualizadas.<br><br>Voltar � p�gina <a href=\"sessao3.php\">inicial</a>.");
?>
