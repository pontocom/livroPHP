<?php /*fich_test1.php*/ ?>
<?php
if (!$file=fopen("texto.txt","r")){
echo "imposs�vel abrir ficheiro";
} else {
$texto=fread($file,35);
echo "$texto";
fclose ($file);
}
?>
