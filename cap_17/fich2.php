<?php /*fich-teste.php*/ ?>
<?php
if (!$file=fopen("texto.txt","r")){
echo "imposs�vel abrir ficheiro";
} else {
  while (!feof($file)){
  echo (fgetc($file));
  //echo (fgets($file,1024)); modo alternativo
  }
fclose ($file);
}
?>
