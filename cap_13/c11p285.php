<?php
$hoje=mktime(12,0,0,6,25,1999);
echo "Aqui s�o ".date("g:i:s a, F d, Y", $hoje);
echo "";
echo "No formato GMT s�o ".gmdate("g:i:s: a, F d, Y", $hoje);
?>
