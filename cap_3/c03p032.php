<?php
		session_start();
		if (!isset($_SESSION['count'])) $_SESSION['count']=0;
		$_SESSION['count']++;
?>

<html>
<head>
<title>Exemplo de Sess�es</title>
</head>
</body>
Caro visitante, voc� j� visualizou esta p�gina por <?php echo $_SESSION['count']; ?> vezes.
<p>
Para continuar, <a href="<?php echo $PHP_SELF ."?". $PHPSESSID ?>">carregue aqui</a>.
</body>
</html>

