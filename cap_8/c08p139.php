<?php
function processa_formulario() {
	global $nome;
	global $email;
	global $linguagem;
	global $browser;
		printf("O utilizador %s cujo o endere�o de email � %s, prefere a linguagem de programa��o %s e utiliza normalmente o browser %s para navegar na WWW.", $_POST['nome'], $_POST['email'], $_POST['linguagem'], $_POST['browser']);
}
?>

