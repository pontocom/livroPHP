<?php 
// logout.php 

// deve-se iniciar a sess�o para depois destrui-la
session_start(); 
session_destroy(); 

echo "Logout efectuado com sucesso do Utilizador - ".$_SESSION['username'];

echo "<br><br> Agora ser� redireccionado para a p�gina de login. 
<META HTTP-EQUIV=\"refresh\" content=\"2; URL=index.php\"> "; 
?> 