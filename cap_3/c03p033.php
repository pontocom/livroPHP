<html>
<head>
<title>Exemplo de utiliza��o do FTP</title>
</head>
<body>
<?php
$host="ftp.abcde.pt";
$directoria="pub/directoria/jogos";
if(!$ftp=ftp_connect($host)){
	echo "Erro: N�o foi poss�vel estabelecer liga��o ao servidor...";
} else {
	ftp_login($ftp, "anonymous", "carlos.serrao@iscte.pt");
	$directoria_actual=ftp_pwd($ftp);
	echo "A directoria actual � $directoria_actual <br>";
	ftp_chdir($ftp, $directoria);
	$directoria_actual=ftp_pwd($ftp);
	echo "A directoria actual � $directoria_actual <br>";
	if($conteudo=ftp_nlist($ftp, ".")) {
		for($i=0; $I<count($conteudo); $I++) {
			$tamanho=ftp_size($ftp, $conteudo[$I]);
			printf("%s (%s bytes)<br>", $conteudo, $tamanho);
		}
	} else {
		echo "A directoria n�o existe !!!";
	}
	ftp_quit($ftp);
}
?>
</body>
</html>
