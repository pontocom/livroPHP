<?php
session_start();
header("Cache-control: private");
printf("<html><body bgcolor=%s text=%s><b>Pagina de Teste 3</b><br><br>Voltar � p�gina <a href=\"sessao3.php\">principal</a>.</body></html>", $_SESSION['cfundo'], $_SESSION['ctexto']);
?>

