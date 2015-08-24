<?php
 session_start();   
 header("Content-Type: image/jpeg");    
 criar_imagem();   
 die();   

 function criar_imagem()   {        
     //gerar uma string aleat�ria e retirar 6 carcteres a partir da posi��o 10 e guardar numa vari�vel de sess�o
	 $enc = rand(0,100);   
     $key = substr(md5($enc), 10, 6);   
     // defini��o da sess�o   
     $_SESSION["key"] = $key;   
     // Cria��o da imagem ***   
     $imagem = ImageCreatetruecolor(150, 50);
	 //criar uma imagem apartir de uma j� existente
	 //$image =imageCreateFromJPEG("galinha.jpg");
   
     // defini��o de tr�s cores  
     $clr_cyan = ImageColorAllocate($imagem, 255,  0, 255);   
     $clr_yell = ImageColorAllocate($imagem, 255, 255, 0);  
	 $clr_black = ImageColorAllocate($imagem, 0, 0, 0);   
     // imagem de fundo amarela 
     imagefill($imagem, 0, 0, $clr_yell);   
    //  colocar linhas e um rectangulo sobre a imagem  
     imageline($imagem, 5, 1, 70, 50, $clr_cyan);   
     imagefilledrectangle($imagem, 100, 30, 120, 50, $clr_cyan);      
     imagefilledellipse($imagem, 120, 10, 30, 30, $clr_cyan);
	 imageline($imagem, 60, 1, 116, 50, $clr_yell);
	 imageline($imagem, 110, 1, 166, 50, $clr_black);
	 // colocar o c�digo da chave sobre a imagem   
     imagestring($imagem, 5, 35, 15, $key, $clr_cyan);  
	 // fazer output da imagem    
     imagejpeg($imagem);   
     // limpar a mem�ria 
     imagedestroy($imagem);   
 }   
?>   
