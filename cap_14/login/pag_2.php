<?php 
// Login/Session 
// link_2.php 

// ligar � database 
//include("connect.php"); 
 
include("auth.php"); 
 
include("nav.php"); 

echo "Esta �  a p�gina 2."; 
echo "<br>Utilizador - " . $_SESSION['username'];

// close mysql connection 
mysql_close(); 
?> 