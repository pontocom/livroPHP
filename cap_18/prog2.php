<?php
$line1 = exec('dir', $output, $error); 
while (list(,$line) = each($output)){ 
  echo $line, "<BR>\n"; 
} 
if ($error){ 
  echo "C�digo de erro: $error<BR>\n"; 
  exit; 
} 
?>
