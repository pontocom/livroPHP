<?php
//Existe $_GET['marca']?
if(!isset($_POST['marca'])){
    header("Location:php_session_token.php");
    die("boa tentativa");
}
  
$codigo = $_SERVER['HTTP_USER_AGENT'];
$codigo .= 'Marques+Carlos';
$digital = md5($codigo);
 
//O $_POST['marca'] bate com a id digital?
if ($digital !== $_POST['marca']){
	header("Location:php_session_token.php");
    die("boa tentativa");
}    
//sess�o � v�lida
session_start();
//session_regenerate_id();
//echo "processar c�digo";
echo "<br>entrou com sess�o - ". session_id();
echo "<br>marca -".$_POST[marca];
echo "<br>pode colocar agora c�digo para processar dados do pedido da password";
?>