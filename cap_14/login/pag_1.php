<?php
// Login/sess�es
// link_1.php 

// ligar � base de dados 
//include("connect.php"); 

//include("auth.php"); 
//include("nav.php"); 
session_start();
if(!isset($_SESSION['username'])) {
  	echo 'Acesso interdito <BR>';
	include('auth.php');
   exit;
}	
else {
include("auth.php"); 
include("nav.php");
echo "Esta � a p�gina 1."; 
echo "<br>Utilizador - " . $_SESSION['username'];
// fechar liga��o mysql
mysql_close(); 
}
?> 