<?php   
 session_start();   
  
 if ( ($_POST["input"] == $_SESSION["key"]) && (!empty($_POST["input"]) && !empty($_SESSION["key"])) )   {   
     // fazer autentica��o ou registo
	 echo "Acaba de passar o teste neste exemplo. <br><br>";   
     echo "A sua mensagem: \"" . $_POST["mensagem"] . "\" est� a ser mostrada ";   
       
 } else {   
     echo "N�o passou o teste pois indicou.<br><br>";   
     echo " " . $_POST["input"] . " como valor na imagem <br>";   
     echo " e a resposta correcta � " . $_SESSION["key"];   
 }   
?>   
