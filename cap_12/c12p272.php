<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
// se for nula aparece a caixa de di�logo

header('WWW-Authenticate: Basic realm="Autentica��o com PHP"');
        header('HTTP/1.0 401 Unauthorized');
        exit;

} else if (isset($_SERVER['PHP_AUTH_USER'])) {
// se n�o for nula abre o ficheiro com a informa��o sobre os utilizadores
//$file = "/usr/local/apache/htdocs/codigo/autentic/autoriz.txt";

$file = "autoriz.txt";
$fp = fopen($file, "r");

       while(!feof($fp)) {
       $linha=fgets($fp, 128);
       $elem_linha=explode (':',$linha);
              if (feof($fp)) {
                break;
               }
              if ((trim($elem_linha[0])==$_SERVER['PHP_AUTH_USER']) && (trim($elem_linha[1])== $_SERVER['PHP_AUTH_PW'])) {
                $authentic = 1;
                      break;
                } else {
                    $authentic = 0;
                }
        }

        fclose ($fp);
        if ($authentic == "1") {

              echo "<P>Est� autorizado</p>";
              exit;

       } else {

       header('WWW-Authenticate: Basic realm="Autentica��o PHP"');
                        header('HTTP/1.0 401 Unauthorized');
                        echo 'Requer autoriza��o.';
                        exit;
        }
 }
?>

