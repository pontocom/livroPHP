<?php 
// Login/sess�es
// link_3.php 

// liga��o � base de dados 
//include("connect.php"); 

include("auth.php"); 

include("nav.php"); 

echo "Esta � a pagina 3.";
echo "<br>Utilizador - " . $_SESSION['username']; 

// fechar liga��o mysql
mysql_close(); 
?> 