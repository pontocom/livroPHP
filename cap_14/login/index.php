<?php 
// Login/sess�o
// index.php 


include("auth.php"); 

include("nav.php"); 

echo "Esta � a homepage.";
echo "<br><br>Utilizador - " . $_SESSION['username']; 

// Fechar a liga��o ao mysql
mysql_close(); 
?> 